<?php
/* For licensing terms, see /license.txt */

use ChamiloSession as Session;

$language_file = array('exercice', 'work', 'document', 'admin', 'gradebook');

require_once '../inc/global.inc.php';
$current_course_tool  = TOOL_STUDENTPUBLICATION;

api_protect_course_script(true);

require_once 'work.lib.php';
$this_section = SECTION_COURSES;

$studentId = isset($_GET['studentId']) ? intval($_GET['studentId']) : null;

if (empty($studentId)) {
    api_not_allowed(true);
}

$tool_name = get_lang('StudentPublications');
$group_id = api_get_group_id();

$userInfo = api_get_user_info($studentId);
$courseInfo = api_get_course_info();

if (empty($userInfo) || empty($courseInfo)) {
    api_not_allowed(true);
}

// Only a teachers page.

if (!empty($group_id)) {
    $group_properties  = GroupManager :: get_group_properties($group_id);
    $show_work = false;

    if (api_is_allowed_to_edit(false, true)) {
        $show_work = true;
    } else {
        // you are not a teacher
        $show_work = GroupManager::user_has_access(
            $user_id,
            $group_id,
            GroupManager::GROUP_TOOL_WORK
        );
    }

    if (!$show_work) {
        api_not_allowed();
    }

    $interbreadcrumb[] = array(
        'url' => '../group/group.php',
        'name' => get_lang('Groups')
    );
    $interbreadcrumb[] = array(
        'url' => '../group/group_space.php?gidReq='.$group_id,
        'name' => get_lang('GroupSpace').' '.$group_properties['name']
    );
} else {
    if (!api_is_allowed_to_edit(false, true)) {
        api_not_allowed(true);
    }
}

$action = isset($_GET['action']) ? $_GET['action'] : null;

switch ($action) {
    case 'export_to_pdf':
        exportAllWork($studentId, $courseInfo, 'pdf');
        break;
    exit;
    case 'download':
        if (api_is_allowed_to_edit()) {
            downloadAllFilesPerUser($studentId, $courseInfo);
        }
        break;
    case 'delete_all':
        if (api_is_allowed_to_edit()) {
            $deletedItems = deleteAllWorkPerUser($studentId, $courseInfo);
            if (!empty($deletedItems)) {
                $message = get_lang('DocDel').'<br >';
                foreach ($deletedItems as $item) {
                    $message .= $item['title'].'<br />';
                }
                $message = Display::return_message($message, 'info', false);
                Session::write('message', $message);
            }
            header('Location: '.api_get_self().'?studentId='.$studentId.'&'.api_get_cidreq());
            exit;
        }
        break;
}

$interbreadcrumb[] = array(
    'url' => api_get_path(WEB_CODE_PATH).'work/work.php?'.api_get_cidreq(),
    'name' => get_lang('StudentPublications')
);
$interbreadcrumb[] = array(
    'url' => '#',
    'name' => $userInfo['complete_name']
);

Display :: display_header(null);

$workPerUser = getWorkPerUser($studentId);

echo Session::read('message');
Session::erase('message');

echo '<div class="actions">';
echo '<a href="'.api_get_path(WEB_CODE_PATH).'work/work.php?'.api_get_cidreq().'">'.
        Display::return_icon('back.png', get_lang('BackToWorksList'), '', ICON_SIZE_MEDIUM).'</a>';

if (api_is_allowed_to_edit()) {
    echo '<a href="'.api_get_path(WEB_CODE_PATH).'work/student_work.php?action=export_to_pdf&studentId='.$studentId.'&'.api_get_cidreq().'">'.
        Display::return_icon('pdf.png', get_lang('ExportToPDF'), '', ICON_SIZE_MEDIUM).'</a>';

    echo '<a href="'.api_get_path(WEB_CODE_PATH).'work/student_work.php?action=download&studentId='.$studentId.'&'.api_get_cidreq().'">'.
        Display::return_icon('save.png', get_lang('Download'), '', ICON_SIZE_MEDIUM).'</a>';

    echo '<a
            onclick="javascript:if(!confirm(\''.get_lang('AreYouSureToDelete').'\')) return false;"
            href="'.api_get_path(WEB_CODE_PATH).'work/student_work.php?action=delete_all&studentId='.$studentId.'&'.api_get_cidreq().'">'.
        Display::return_icon('delete.png', get_lang('DeleteAllFiles'), '', ICON_SIZE_MEDIUM).'</a>';
}

echo '</div>';

$table = new HTML_Table(array('class' => 'data_table'));
$column = 0;
$row = 0;
$headers = array(
    get_lang('Title'),
    get_lang('HandedOutDate'),
    get_lang('HandOutDateLimit'),
    get_lang('Score'),
    get_lang('Actions')
);
foreach ($headers as $header) {
    $table->setHeaderContents($row, $column, $header);
    $column++;
}
$row++;
$column = 0;

foreach ($workPerUser as $work) {
    $work = $work['work'];
    $scoreWeight = intval($work->qualification) == 0 ? null : $work->qualification;
    $workId = $work->id;
    $workExtraData = get_work_assignment_by_id($workId);

    foreach ($work->user_results as $userResult) {
        $table->setCellContents($row, $column, $work->title.' ['.trim(strip_tags($userResult['title'])).']');
        $table->setCellAttributes($row, $column, array('width' => '300px'));
        $column++;
        $table->setCellContents($row, $column, $userResult['sent_date']);
        $column++;
        $dateQualification = !empty($workExtraData['expires_on']) && $workExtraData['expires_on'] != '0000-00-00 00:00:00' ? api_get_local_time($workExtraData['expires_on']) : '-';
        $table->setCellContents($row, $column, $dateQualification);
        $column++;
        $score = '-';
        if (!empty($scoreWeight)) {
            $score = strip_tags($userResult['qualification'])."/".$scoreWeight;
        }
        $table->setCellContents($row, $column, $score);
        $column++;

        // Actions
        $links = null;

        // is a text
        $url = api_get_path(WEB_CODE_PATH).'work/view.php?'.api_get_cidreq().'&id='.$userResult['id'];
        $links .= Display::url(Display::return_icon('default.png'), $url);

        if (!empty($userResult['url'])) {
            $url = api_get_path(WEB_CODE_PATH).'work/download.php?'.api_get_cidreq().'&id='.$userResult['id'];
            $links .= Display::url(Display::return_icon('save.png', get_lang('Download')), $url);
        }
        $url = api_get_path(WEB_CODE_PATH).'work/edit.php?'.api_get_cidreq().'&item_id='.$userResult['id'].'&id='.$workId.'&parent_id='.$workId;
        $links .= Display::url(Display::return_icon('edit.png', get_lang('Comment')), $url);

        $table->setCellContents($row, $column, $links);

        $row++;
        $column = 0;
    }
}

echo $table->toHtml();

Display :: display_footer();
