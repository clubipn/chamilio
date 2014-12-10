<?php
/*
for more information: see languages.txt in the lang folder.
*/
$SelectADateOnTheCalendar = "Seleccione una fecha del calendario";
$AreYouSureDeleteTestResultBeforeDateD = "¿Está seguro que desea eliminar los resultados de este ejercicio antes de la fecha seleccionada?";
$CleanStudentsResultsBeforeDate = "Eliminar todos los resultados antes de la fecha selecionada";
$AreYouSureToEmptyAllTestResults = "¿Está seguro de eliminar todos los resultados de todos los ejercicios?";
$CleanAllStudentsResultsForAllTests = "¿Está seguro de eliminar todos los resultados de los ejericios?";
$TestFeedbackNotShown = "Esta prueba está configurada para no dar retro-alimentación a los alumnos. Los comentarios correspondientes no se mostrarán al fin de la prueba, pero podrían serle útil, como docente, en el momento de revisar los detalles de las preguntas.";
$FeedbackDisplayOptions = "Manera en la cual se mostrará el comentario definido para cada pregunta. Esta opción define como un estudiante visualizará (o no) los comentarios (retro-alimentación) ingresados para cada alternativa en cada pregunta. Recomendamos evaluar las distintas opciones antes de invitar los estudiantes a tomar la prueba.";
$ImportAikenQuizExplanationExample = "Este es el texto de la pregunta 1
A. Respuesta 1
B. Respuesta 2
C. Respuesta 3
ANSWER: B

Este es el texto de la pregunta 2 (notese la línea blanca arriba)
A. Respuesta 1
B. Respuesta 2
C. Respuesta 3
D. Respuesta 4
ANSWER: D
ANSWER_EXPLANATION: Este es un texto opcional de retroalimentación que aparecerá al costado de la respuesta correcta.";
$ImportAikenQuizExplanation = "El formato Aiken es un simple formato texto (archivo .txt) con varios bloques de preguntas, cada bloque separado por una línea blanca. La primera línea es la pregunta. Las líneas de respuestas tienen un prefijo de letra y punto, y la respuesta correcta sigue, con el prefijo 'ANSWER:'. Ver ejemplo a continuación.";
$ExerciseAikenErrorNoAnswerOptionGiven = "El archivo importado tiene por lo menos una pregunta sin respuesta (o las respuestas no incluyen la letra de prefijo requerida). Asegúrese de que cada pregunta tengo por lo mínimo una respuesta y que esté prefijada por una letra y un punto o una paréntesis, como sigue: A. Respuesta uno";
$ExerciseAikenErrorNoCorrectAnswerDefined = "El archivo importado contiene por lo menos una pregunta sin ninguna respuesta definida. Asegúrese que todas las preguntas tienen una línea tipo ANSWER: [letra], y vuelva a intentar.";
$ThereWasAProblemWithYourFile = "Hubo un error desconocido en su archivo. Por favor revise su formato e intente nuevamente.";
$YouMustUploadAZipOrTxtFile = "Tiene que subir un archivo .txt o .zip";
$NoTxtFileFoundInTheZip = "No se encontró ningun archivo .txt en el zip";
$ImportAikenQuiz = "Importar quiz en formato Aiken";
$ExerciseWasActivatedFromXToY = "El ejercicio estuvo disponible desde %s hasta %s";
$SelectAnAnswerToContinue = "Tiene que seleccionar una respuesta para poder continuar";
$IfYouContinueYourAnswerWillBeSavedAnyChangeWillBeNotAllowed = "Si continua, sus respuestas serán guardadas, y no podrá más modificarlas. Está seguro que desea terminar?";
$YesImSure = "Sí, he terminado!";
$NoIWantToTurnBack = "No, deseo revisar la prueba primero";
$QuestionReused = "Pregunta añadida al ejercicio";
$QuestionCopied = "Pregunta copiada a la prueba";
$ZeroMeansNoQuestionWillBeSelectedMinusOneMeansThatAllQuestionsWillBeSelected = "-1 = Todas las preguntas serán seleccionadas. 0 = Ninguna pregunta será seleccionada.";
$EmailNotificationTemplateDescription = "Puede modificar el correo enviado a los usuarios al terminar el ejercicio. Puede usar los siguientes términos: 

{{ student.username }}
{{ student.firstname }} 
{{ student.lastname }}
{{ student.official_code }} 
{{ exercise.title }} 
{{ exercise.start_time }}
{{ exercise.end_time }}
{{ course.title }}
{{ course.code }}";
$EmailNotificationTemplate = "Plantilla del correo electrónico enviado al usuario al terminar el ejercicio.";
$ExerciseEndButtonDisconnect = "Desconexión de la plataforma";
$ExerciseEndButtonExerciseHome = "Lista de ejercicios";
$ExerciseEndButtonCourseHome = "Página principal del curso";
$ExerciseEndButton = "Botón al terminar el ejercicio";
$HideQuestionTitle = "Ocultar el título de la pregunta";
$QuestionSelection = "Selección de preguntas";
$OrderedCategoriesByParentWithQuestionsRandom = "Categorías ordenadas según la categoría padre, con preguntas desordenadas";
$OrderedCategoriesByParentWithQuestionsOrdered = "Categorías ordenadas según la categoría padre, con preguntas ordenadas";
$RandomCategoriesWithRandomQuestionsNoQuestionGrouped = "Categorías tomadas al azar, con preguntas desordenadas, sin agrupar preguntas";
$RandomCategoriesWithQuestionsOrderedNoQuestionGrouped = "Categorías tomadas al azar, con preguntas ordenadas, sin agrupar preguntas";
$RandomCategoriesWithRandomQuestions = "Categorías tomadas al azar, con preguntas desordenadas";
$OrderedCategoriesAlphabeticallyWithRandomQuestions = "Categorías ordenadas (alfabéticamente), con preguntas desordenadas";
$RandomCategoriesWithQuestionsOrdered = "Categorías tomadas al azar, con preguntas ordenadas";
$OrderedCategoriesAlphabeticallyWithQuestionsOrdered = "Categorías ordenadas alfabéticamente, con preguntas ordenadas";
$UsingCategories = "Usando categorías";
$OrderedByUser = "Ordenado según la lista de preguntas";
$ToReview = "Por revisar";
$Unanswered = "Sin responder";
$Answered = "Respondida";
$CurrentQuestion = "Pregunta actual";
$MediaQuestions = "Enunciados compartidos";
$AddedToLPCannotBeAccessed = "Este ejercicio ha sido incluido en una secuencia de aprendizaje, por lo cual no podrá ser accesible directamente por los estudiantes desde aquí. Si quiere colocar el mismo ejercicio disponible a través de la herramienta ejercicios, haga una copia del ejercicio en cuestión pulsando sobre el icono de copia.";
$langExercice = "Ejercicio";
$langActivate = "Activar";
$langDeactivate = "Desactivar";
$langNoEx = "Por el momento, no hay ejercicios";
$langNewEx = "Nuevo ejercicio";
$langQuestion = "Pregunta";
$langQuestions = "Preguntas";
$langAnswers = "Respuestas";
$langTrue = "Verdadero";
$langAnswer = "Respuesta";
$langResult = "Resultados";
$langNoResult = "Aún no hay resultados";
$langYourResults = "Sus resultados";
$langStudentResults = "Puntuaciones de los estudiantes";
$langExerciseType = "Tipo de ejercicio";
$langExerciseName = "Nombre del ejercicio";
$langExerciseDescription = "Descripción del ejercicio";
$langSimpleExercise = "Todas las preguntas en una página";
$langSequentialExercise = "Una pregunta por página (secuencial)";
$langRandomQuestions = "Preguntas aleatorias";
$langGiveExerciseName = "Por favor, proporcione un nombre al ejercicio";
$langSound = "Archivo de audio o video";
$langDeleteSound = "Borrar el archivo de audio o video";
$langNoAnswer = "Actualmente no hay respuestas";
$langGoBackToQuestionPool = "Volver al banco de preguntas";
$langGoBackToQuestionList = "Volver a la lista de ejercicios";
$langQuestionAnswers = "Responder la pregunta";
$langUsedInSeveralExercises = "Precaución! Esta pregunta y sus respuestas son usadas en varios ejercicios. ¿Quiere modificarlas?";
$langModifyInAllExercises = "en todos los ejercicios";
$langModifyInThisExercise = "sólo en este ejercicio";
$langAnswerType = "Tipo de respuesta";
$langMultipleSelect = "Respuesta múltiple";
$langFillBlanks = "Rellenar blancos";
$langMatching = "Relacionar";
$langAddPicture = "Añadir una foto";
$langReplacePicture = "Reemplazar la imagen";
$langDeletePicture = "Eliminar la imagen";
$langQuestionDescription = "Texto, imagen, audio o video adicionales";
$langGiveQuestion = "Por favor, escriba la pregunta";
$langWeightingForEachBlank = "Por favor, otorgue una puntuación a cada espacio en blanco";
$langUseTagForBlank = "use corchetes [...] para definir uno o más espacios en blanco";
$langQuestionWeighting = "Puntuación";
$langMoreAnswers = "+resp";
$langLessAnswers = "-resp";
$langMoreElements = "+elem";
$langLessElements = "-elem";
$langTypeTextBelow = "Escriba el texto debajo";
$langDefaultTextInBlanks = "<table cellspacing=\"0\" cellpadding=\"10\" border=\"1\" width=\"720\" style=\"\" height:=\"\"> <tbody>  <tr>     <td colspan=\"2\">      <h3>Ejemplo: Calcular el índice de masa corporal</h3>     </td>  </tr>  <tr>     <td style=\"text-align: right;\">     <strong>Edad</strong>    </td>    <td width=\"75%\" style=\"\">[25] años</td> </tr> <tr>    <td style=\"text-align: right;\"><strong>Sexo</strong></td>  <td style=\"\" text-align:=\"\">[M] (M o F)</td>   </tr>   <tr>     <td style=\"text-align: right;\">      <strong>Peso</strong></td>      <td style=\"\" text-align:=\"\">66 Kg</td>   </tr>   <tr>     <td style=\"vertical-align: top; text-align: right;\">           <strong>Talla</strong>    </td>     <td style=\"vertical-align: top;\">1.78 m</td>   </tr>    <tr>     <td style=\"vertical-align: top; text-align: right;\">       <strong>Índice de masa corporal</strong>     </td>    <td style=\"vertical-align: top;\">[29] IMC =Peso/Talla<sup>2</sup> (Cf.<a href=\"http://en.wikipedia.org/wiki/Body_mass_index\" onclick=\"window.open(this.href,'','resizable=yes,location=yes,menubar=no,scrollbars=yes,status=yes,toolbar=no,fullscreen=no,dependent=no,width=800,height=600,left=40,top=40,status'); return false\"> Artículo de Wikipedia</a>) </td>    </tr></tbody> </table>";
$langDefaultMatchingOptA = "1914 - 1918";
$langDefaultMatchingOptB = "1939 - 1945";
$langDefaultMakeCorrespond1 = "Primera Guerra Mundial";
$langDefaultMakeCorrespond2 = "Segunda Guerra Mundial";
$langDefineOptions = "Por favor, defina las opciones";
$langMakeCorrespond = "Relacionar";
$langFillLists = "Por favor, complete las dos listas siguientes";
$langGiveText = "Por favor, escriba el texto";
$langDefineBlanks = "Por favor, defina un espacio en blanco con corchetes [...]";
$langGiveAnswers = "Por favor, escriba las respuestas de las preguntas";
$langChooseGoodAnswer = "Por favor, elija la respuesta correcta";
$langChooseGoodAnswers = "Por favor, elija una o más respuestas correctas";
$langQuestionList = "Listado de preguntas del ejercicio";
$langMoveUp = "Subir";
$langMoveDown = "Bajar";
$langGetExistingQuestion = "Banco de preguntas";
$langFinishTest = "Terminar";
$langQuestionPool = "Banco de preguntas";
$langOrphanQuestions = "Preguntas huérfanas";
$langNoQuestion = "Actualmente no hay preguntas";
$langAllExercises = "Todos los ejercicios";
$langFilter = "Filtro";
$langGoBackToEx = "Volver al ejercicio";
$langReuse = "Reutilizar";
$langExerciseManagement = "Gestión de ejercicios";
$langQuestionManagement = "Gestión de preguntas / respuestas";
$langQuestionNotFound = "No se encontró la pregunta";
$langExerciseNotFound = "El ejercicio no se encontró o no está visible";
$langAlreadyAnswered = "Ya ha respondido la pregunta";
$langElementList = "Listado de elementos";
$langScore = "Puntuación";
$langCorrespondsTo = "Correspondencias con";
$langExpectedChoice = "Selección correcta";
$langYourTotalScore = "Su puntuación total es";
$ReachedMaxAttemptsAdmin = "Ha llegado al número máximo de intentos permitidos en este ejercicio. No obstante, como usted es un profesor de este curso, puede seguir contestándolo. Recuerde que sus resultados no aparecerán en la página de resultados.";
$langExerciseAdded = "Ejercicio añadido";
$Build = "Construir";
$langEvalSet = "Parámetros de evaluación";
$langActive = "activo";
$langInactive = "inactivo";
$langQuestCreate = "crear preguntas";
$langExRecord = "su ejercicio ha sigo guardado";
$langBackModif = "volver a la página de edición de preguntas";
$langDoEx = "realizar el ejercicio";
$langDefScor = "describir los parámetros de evaluación";
$langCreateModif = "Crear / modificar preguntas";
$langSub = "subtítulo";
$langMyAnswer = "Mi respuesta";
$langMorA = "+ respuesta";
$langLesA = "- respuesta";
$langRecEx = "guardar el ejercicio";
$langRecQu = "Guardar preguntas";
$langRecAns = "Guardar respuestas";
$langIntroduction = "Introducción";
$langTitleAssistant = "Asistente para la creación de ejercicios";
$langQuesList = "Lista de preguntas";
$langSaveEx = "guardar ejercicios";
$langFinish = "Terminar";
$langCancel = "Cancelar";
$langQImage = "Pregunta con una imagen";
$langAddQ = "Añadir una pregunta";
$langDoAnEx = "Realizar un ejercicio";
$langGenerator = "Lista de ejercicios";
$langChoice = "Su selección";
$langCorrect = "Correcto";
$langPossAnsw = "Número de respuestas correctas para una pregunta";
$langStudAnsw = "número de errores del estudiante";
$langDetermine = "Determine el valor de la evaluación modificando la tabla situada bajo este texto. Después pulse \"OK\"";
$langNonNumber = "un valor no numérico";
$langReplaced = "Reemplazado";
$langSuperior = "un valor mayor que 20";
$langRep20 = "fue introducido. Fue sustituido por 20";
$langDefault = "Valores por defecto *";
$langDefComment = "los valores anteriores serán reemplazados cuando pulse el botón \"valores por defecto\"";
$langScoreGet = "números en negrita = puntuación";
$langShowScor = "Mostrar la evaluación del estudiante:";
$langStep1 = "Paso 1";
$langStep2 = "Paso 2";
$langTake = "tomar";
$langAmong = "entre";
$langImportHotPotatoesQuiz = "Importar ejercicios de HotPotatoes";
$langHotPotatoesTests = "Importar ejercicios HotPotatoes";
$langDownloadFile = "Enviar un archivo";
$langDownloadImg = "Enviar una imagen al servidor";
$langDownloadEnd = "Se ha realizado el envío";
$langNoSpace = "El envio ha fallado. No hay suficiente espacio en su directorio";
$langZipNoPhp = "El archivo zip no puede contener archivos con formato .PHP";
$langNoImg = "Ejercicios sin imágenes";
$langImgNote_st = "<br> Debe enviar otra vez";
$langImgNote_en = "imagen(es) :";
$langDocDeleted = "Documento eliminado";
$langViMod = "Visibilidad modificada";
$langNameNotEqual = "¡ no es un fichero válido !";
$langIndice = "Índice";
$langIndices = "Indices";
$langDateExo = "Fecha";
$langShowQuestion = "Ver pregunta";
$langUnknownExercise = "Ejercicio desconocido";
$langReuseQuestion = "Reutilizar la pregunta";
$langCreateExercise = "Crear ejercicio";
$langCreateQuestion = "Crear una pregunta";
$langCreateAnswers = "Crear respuestas";
$langModifyExercise = "Modificar ejercicio";
$langModifyAnswers = "modificar las respuestas";
$langForExercise = "para el ejercicio";
$langUseExistantQuestion = "Usar una pregunta existente";
$FreeAnswer = "Respuesta abierta";
$notCorrectedYet = "Esta pregunta aún no ha sido corregida. Hasta que no lo sea, Ud. tendrá en ella la calificación de cero, lo cual se reflejará en su puntuación global.";
$adminHP = "Administración Hot Potatoes";
$NewQu = "Nueva pregunta";
$NoImage = "Seleccione una imagen";
$langAnswerHotspot = "En cada zona interactiva la descripción y el valor son obligatorios - el feedback es opcional.";
$langMinHotspot = "Tiene que crear al menos una (1) zona interactiva.";
$langMaxHotspot = "El máximo de zonas interactivas que puede crear es doce (12)";
$langHotspotError = "Por favor, proporcione una descripción y un valor a cada zona interactiva.";
$langMoreHotspots = "Añadir zona interactiva";
$langLessHotspots = "Quitar zona interactiva";
$langHotspotZones = "Zonas interactivas";
$langNextQuestion = "Siguiente pregunta";
$langCorrectAnswer = "Respuesta correcta";
$langHotspotHit = "Su respuesta fué";
$langOnlyJPG = "Para las zonas interactivas sólo puede usar imágenes JPG (o JPEG)";
$langFinishThisTest = "Mostrar las respuestas correctas a cada pregunta y la puntuación del ejercicio";
$langAllQuestions = "Todas las preguntas";
$langModifyTitleDescription = "Editar título y comentarios";
$langModifyHotspots = "Editar respuestas/zonas interactivas";
$langHotspotNotDrawn = "Todavía no ha dibujado todas las zonas interactivas";
$langHotspotWeightingError = "Debe dar un valor (>0) positivo a todas las zonas interactivas";
$langHotspotValidateError1 = "Debe contestar completamente a la pregunta (";
$langHotspotValidateError2 = "clics requeridos en la imagen) antes de ver los resultados";
$langHotspotRequired = "En cada zona interactiva la descripción y el valor son obligatorios. El feedback es opcional.";
$langHotspotChoose = "<div style=\"padding:2px 3px;\">• Para crear una zona interactiva: seleccione la forma asociada al color y después dibuje la zona interactiva.</div><div style=\"padding:2px 3px;\">• Para mover una zona interactiva, seleccione el color, haga clic en otro punto de la imagen y finalmente dibuje la zona interactiva.</div><div style=\"padding:2px 3px;\">• Para añadir una zona interactiva: haga clic en el botón [+zona interactiva].</div><div style=\"padding:2px 3px;\">• Para cerrar una forma poligonal: botón derecho del ratón y seleccionar \"Cerrar polígono\".</div>";
$Fault = "Incorrecta";
$HotSpot = "Zonas de imagen";
$ClickNumber = "Número de clics";
$HotspotGiveAnswers = "Por favor, responda";
$Addlimits = "Añadir límites";
$AreYouSure = "Está seguro";
$StudentScore = "Puntuación de los alumnos";
$backtoTesthome = "Volver a la página principal del ejercicio";
$Feedback = "Comentarios";
$MarkIsUpdated = "La nota ha sido actualizada";
$MarkInserted = "Nota insertada";
$PleaseGiveAMark = "Por favor, proporcione una nota";
$EditCommentsAndMarks = "Corregir y puntuar";
$AddComments = "Añadir comentarios";
$Number = "Nº";
$Weighting = "Puntuación";
$ChooseQuestionType = "Para crear una nueva pregunta, seleccione el tipo arriba";
$MatchesTo = "Corresponde a";
$CorrectTest = "Corregir este ejercicio";
$ViewTest = "Ver";
$State = "Estado";
$NotAttempted = "Sin intentar";
$AddElem = "Añadir elemento";
$DelElem = "Quitar elemento";
$PlusAnswer = "Añadir respuesta";
$LessAnswer = "Quitar respuesta";
$YourScore = "Su puntuación";
$Attempted = "Intentado";
$AssignMarks = "Puntuar";
$Results = "Resultados";
$ExerciseStored = "Proceda haciendo clic sobre el tipo de pregunta e introduciendo los datos correspondientes.";
$ChooseAtLeastOneCheckbox = "Escoger al menos una respuesta correcta";
$ExerciseEdited = "El ejercicio ha sido modificado";
$ExerciseDeleted = "El ejercicio ha sido borrado";
$ClickToCommentAndGiveFeedback = "Haga clic en el siguiente enlace para corregir y proporcionar un feedback a la respuesta";
$OpenQuestionsAttempted = "Un alumno ha contestado a una pregunta abierta";
$AttemptDetails = "Detalles de los intentos";
$TestAttempted = "Ejercicio";
$StudentName = "Nombre del estudiante";
$StudentEmail = "E-Mail del estudiante";
$OpenQuestionsAttemptedAre = "La pregunta abierta intentada está";
$CourseName = "Nombre del curso";
$UploadJpgPicture = "Enviar una imagen (jpg, png o gif)";
$HotspotDescription = "Descripción de la zona interactiva";
$ExamSheetVCC = "Ejercicio visto/corregido/comentado por el profesor";
$AttemptVCC = "Los siguientes intentos han sido vistos/comentados/corregidos por el profesor";
$ClickLinkToViewComment = "Haga clic en el enlace inferior para acceder a su cuenta y ver corregida su hoja de ejercicios";
$Regards = "Cordialmente";
$AttemptVCCLong = "Su intento en el ejercicio %s ha sido visto/comentado/corregido por el profesor. Haga clic en el enlace inferior para acceder a su cuenta y ver su hoja de ejercicios.";
$DearStudentEmailIntroduction = "Estimado estudiante,";
$ExerciseFinished = "Ejercicio finalizado";
$ResultsEnabled = "Modo autoevaluación activado. Ahora, al final del ejercicio los estudiantes podrán ver las respuestas correctas.";
$ResultsDisabled = "Modo examen activado. Ahora, al final del ejercicio los estudiantes no podrán ver las respuestas correctas.";
$ExportWithUserFields = "Incluir los campos de usuario en la exportación";
$ExportWithoutUserFields = "Excluir los campos de usuario de la exportación";
$DisableResults = "No mostrar los resultados a los alumnos";
$EnableResults = "Mostrar los resultados a los alumnos";
$ValidateAnswer = "Validar respuesta(s)";
$FillInBlankSwitchable = "Una respuesta puede ser correcta para cualquiera de las opciones en blanco.";
$ReachedMaxAttempts = "No puede repetir el ejercicio <b>%s</b> debido a que ya ha realizado el máximo de %s intentos permitidos";
$AdvancedParameters = "Parámetros avanzados";
$RandomQuestionsToDisplay = "Número de preguntas aleatorias a mostrar";
$RandomQuestionsHelp = "Número de preguntas que serán seleccionadas al azar. Escoja el número de preguntas que desea barajar.";
$ExerciseAttempts = "Número máximo de intentos";
$DoNotRandomize = "Sin desordenar";
$Infinite = "Ilimitado";
$BackToExercisesList = "Regresar a Ejercicios";
$ViewScoreChangeHistory = "Ver puntuación en historial de cambios";
$NoStartDate = "No empieza fecha";
$NoLogOfDuration = "Ningún registro de duración";
$EnableTimeLimits = "Establecer un límite temporal";
$ExeStartTime = "Fecha de inicio";
$ExeEndTime = "Fecha de finalización";
$Value = "Valor";
$DeleteAttempt = "¿ Eliminar este intento ?";
$WithoutComment = "Sin comentarios";
$QuantityQuestions = "Número de preguntas";
$FilterExercices = "Filtrar ejercicios";
$FilterByNotRevised = "Filtrar por No revisado";
$FilterByRevised = "Filtrar por Revisado";
$Duration = "Duración";
$ReachedTimeLimit = "Ha llegado al tiempo límite";
$TryAgain = "Intenta otra vez";
$SeeTheory = "Revisar la teoría";
$EndActivity = "Fin de la actividad";
$NoFeedback = "Examen (sin retroalimentación)";
$DirectFeedback = "Autoevaluación (retroalimentación inmediata)";
$FeedbackType = "Retro-alimentación";
$Scenario = "Escenario";
$VisitUrl = "Visitar esta dirección";
$ExitTest = "Salir del examen";
$DurationFormat = "%1 segundos";
$Difficulty = "Dificultad";
$NewScore = "Nueva puntuación";
$NewComment = "Nuevo comentario";
$ExerciseNoStartedYet = "El ejercicio aun no se ha iniciado";
$ExerciseNoStartedAdmin = "El profesor no ha iniciado el ejercicio";
$SelectTargetLP = "Seleccionar lección de destino";
$SelectTargetQuestion = "Seleccionar pregunta de destino";
$DirectFeedbackCantModifyTypeQuestion = "El tipo de evaluación no puede ser modificado ya que fue seleccionado para Autoevaluación";
$CantShowResults = "No disponible";
$CantViewResults = "No se puede ver los resultados";
$ShowCorrectedOnly = "Mostrar ejercicios corregidos";
$ShowUnCorrectedOnly = "Mostrar ejercicios sin corregir";
$HideResultsToStudents = "Ocultar los resultados a los estudiantes";
$ShowResultsToStudents = "Mostrar los resultados a los estudiantes";
$ProcedToQuestions = "Preparar preguntas";
$AddQuestionToExercise = "Añadir pregunta";
$PresentationQuestions = "Presentación de las preguntas";
$UniqueAnswer = "Respuesta única";
$MultipleAnswer = "Respuesta multiple";
$ReachedOneAttempt = "No puede realizar el ejercicio otra vez porque ha superado el número de intentos permitidos para su ejecución.";
$QuestionsPerPage = "Preguntas por pagina";
$QuestionsPerPageOne = "Una";
$QuestionsPerPageAll = "Todas";
$EditIndividualComment = "Editar feedback";
$ThankYouForPassingTheTest = "Gracias por pasar el examen";
$ExerciseAtTheEndOfTheTest = "Al final del ejercicio (retroalimentación)";
$EnrichQuestion = "Enriquecer pregunta";
$langDefaultUniqueQuestion = "¿Cuál de los siguientes alimentos es un producto lácteo?";
$langDefaultUniqueAnswer1 = "Leche";
$langDefaultUniqueComment1 = "La leche es la base de numerosos productos lácteos como la mantequilla, el queso y el yogur";
$langDefaultUniqueAnswer2 = "Avena";
$langDefaultUniqueComment2 = "La avena es uno de los cereales más completos. Por sus cualidades energéticas y nutritivas ha sido un alimento básico de muchos pueblos";
$langDefaultMultipleQuestion = "¿Qué país no pertenece al continente europeo?";
$langDefaultMultipleAnswer1 = "España";
$langDefaultMultipleComment1 = "Es un país soberano miembro de la Unión Europea, constituido en Estado social y democrático de Derecho, y cuya forma de gobierno es la monarquía parlamentaria";
$langDefaultMultipleAnswer2 = "Perú";
$langDefaultMultipleComment2 = "Es un país situado en el lado occidental de Sudamérica. Está limitado por el norte con Ecuador y Colombia, por el este con Brasil, por el  sureste con Bolivia, por el sur con Chile, y por el oeste con el Océano Pacífico";
$langDefaultFillBlankQuestion = "Calcular el índice de masa corporal";
$langDefaultMathingQuestion = "Determinar el orden correcto";
$langDefaultOpenQuestion = "¿Cuándo se celebra el día del Trabajo?";
$langMoreHotspotsImage = "Agregar / editar hotspots en la imagen";
$ReachedTimeLimitAdmin = "Ha alcanzado el límite de tiempo para realizar este ejercicio";
$LastScoreTest = "Última puntuación obtenida";
$BackToResultList = "Volver a lista de resultados";
$EditingScoreCauseProblemsToExercisesInLP = "Si edita la puntuación de esta pregunta modificará el resultado del ejercicio, recuerde que este ejercicio también está agregado a una Lección";
$SelectExercice = "Seleccionar ejercicio";
$YouHaveToSelectATest = "Debes seleccionar un ejercicio";
$HotspotDelineation = "Delineación";
$CreateQuestions = "Crear preguntas";
$MoreOAR = "Agregar OAR";
$LessOAR = "Eliminar OAR";
$LearnerIsInformed = "Este mensaje aparecerá si el estudiante falla un paso";
$MinOverlap = "Mínima superposición";
$MaxExcess = "Máximo exceso";
$MaxMissing = "Zona faltante máxima";
$IfNoError = "Si no existe error";
$LearnerHasNoMistake = "El estudiante no cometió errores";
$YourAnswer = "Su respuesta";
$YourDelineation = "Su delineación :";
$ResultIs = "Su resultado es :";
$Overlap = "Zona de superposición";
$Missing = "Zona faltante";
$Excess = "Zona excesiva";
$Min = "Minimum";
$Max = "Maximum";
$Requirements = "Requerido";
$OARHit = "Uno (o mas) OAR han sido seleccionados";
$TooManyIterationsPleaseTryUsingMoreStraightforwardPolygons = "Demasiadas iteraciones al intentar calcular la respuesta. Por favor intente dibujar su delineación otra vez";
$Thresholds = "Thresholds";
$Delineation = "Delineación";
$QuestionTypeDoesNotBelongToFeedbackTypeInExercise = "Tipo de pregunta no pertenece al tipo de retroalimentación en ejercicios";
$XResultsCleaned = "%d resultados eliminados";
$AreYouSureToDeleteResults = "Está seguro de querer eliminar los resultados";
$ExerciseCopied = "Ejercicio copiado";
$AreYouSureToCopy = "Está seguro de querer copiar";
$EditingExerciseCauseProblemsInLP = "Editar un ejercicio causará problemas en Lecciones";
$ExerciseWithFeedbackWithoutCorrectionComment = "Nota: Este ejercicio ha sido configurado para ocultar las respuestas esperadas.";
$SessionIsReadOnly = "La sesión es de sólo lectura";
$EnableTimerControl = "Habilitar control de tiempo";
$ExerciseTotalDurationInMinutes = "Duración del ejercicio (en minutos)";
$ToContinueUseMenu = "Para continuar esta lección, por favor use el menú lateral.";
$RandomAnswers = "Barajar respuestas";
$NotMarkActivity = "No es posible calificar este elemento";
$YouHaveToCreateAtLeastOneAnswer = "Tienes que crear al menos una respuesta";
$ExerciseAttempted = "Un estudiante ha contestado una pregunta";
$MultipleSelectCombination = "Combinación exacta";
$MultipleAnswerCombination = "Combinación exacta";
$ExerciceExpiredTimeMessage = "El tiempo de la evaluación ha terminado. Sin embargo las preguntas que ya respondió, serán consideradas en la evaluación del ejercicio.";
$AllQuestionsMustHaveACategory = "Todas las preguntas deben de tener por lo menos una categoría asociada.";
$NoMedia = "Sin vínculo a medio";
$AttachToMedia = "Vincular a medio";
$ExamModeWithFinalScoreShowOnlyFinalScoreWithCategoriesIfAvailable = "Mostrar solo el resultado final, con categorías si disponibles";
$Media = "Medio";
$ForceEditingExerciseInLPWarning = "Está autorizado a editar este ejercicio, aunque esté ya usado en una lección. Si lo edita, prueba evitar de modificar el score y concentrarse sobre editar el contenido más no los valores o la clasificación, para evitar afectar los resultados de estudiantes que hubieran tomado esta prueba previamente.";
$CopyExercise = "Copie este ejercicio como uno nuevo";
$CleanStudentResults = "Borrar todos los resultados de los estudiantes en este ejercicio";
$ImportQtiQuiz = "Importar ejercicios de Qti2";
$ReUseACopyInCurrentTest = "Reutilizar una copia de esta pregunta en el ejercicio actual";
$Copy = "Copia";
$QuestionGlobalCategory = "Categoría global";
$CheckThatYouHaveEnoughQuestionsInYourCategories = "Revisar si existen suficientes preguntas en sus categorías.";
$ScoreAverageFromAllAttempts = "Promedio de todos los intentos en ejercicios";
$DefaultContent = "Generar contenido por defecto";
$OralQuestionsAttemptedAreX = "Las preguntas orales respondidas son: %s";
$OralQuestionsAttempted = "Un estudiante ha entregao una pregunta oral o más";
$RelativeScore = "Score relativo";
$AbsoluteScore = "Score absoluto";
$EditQuestions = "Editar preguntas";
$ExerciseDescriptionLabel = "Descripción";
$ExerciseEditionNotAvailableInSession = "Edición de ejercicio de curso no autorizada desde la sesión";
$UniqueAnswerNoOption = "Respuesta única con no-se";
$MultipleAnswerTrueFalse = "Respuestas múltiples v/f/no-se";
$MultipleAnswerCombinationTrueFalse = "Combinación v/f/no-se";
$DontKnow = "No se";
$False = "Falso";
$DoubtScore = "No se";
$HotSpotDelineation = "Delineación hotspot";
$PropagateNegativeResults = "Propagar los resultados negativos entre preguntas";
$InsertALinkToThisQuestionInTheExercise = "Insertar esta pregunta en el ejercicio como un vínculo (no una copia)";
$OnlyShowScore = "Modo ejercicio: Mostrar solo la puntuación";
$ImportExcelQuiz = "Importar ejercicio via Excel";
$DownloadExcelTemplate = "Descargar plantilla Excel";
$ExerciseWillBeActivatedFromXToY = "El ejercicio estará visible del %s al %s";
$EnableStartTime = "Usar tiempo de publicación";
$EnableEndTime = "Usar tiempo de fin de publicación";
$ExerciseAvailableFromX = "Ejercicio disponible desde el %s";
$ExerciseAvailableUntilX = "Ejercicio disponible hasta el %s";
$TestLimitsAdded = "Límites de ejercicios agregados";
$AddLimits = "Agregar límites";
$Unlimited = "Sin límites";
$LimitedTime = "Tiempo limitado";
$LimitedAttempts = "Intentos limitados";
$Times = "Tiempos";
$Random = "Aleatorio";
$ExerciseTimerControlMinutes = "Habilitar ejercicios con control de tiempo.";
$Numeric = "Numérico";
$Acceptable = "Aceptable";
$Hotspot = "Zona interactiva";
$ChangeTheVisibilityOfTheCurrentImage = "Cambiar visibilidad de la imagen";
$Steps = "Etapas";
$OriginalValue = "Valor original";
$ChooseAnAnswer = "Seleccione una respuesta";
$ImportExercise = "Importar ejercicio";
$MultipleChoiceMultipleAnswers = "Elecciones múltiples, respuestas múltiples";
$MultipleChoiceUniqueAnswer = "Elección múltiple, respuesta única";
$HotPotatoesFiles = "Archivos HotPotatoes";
$HotPotatoes = "HotPotatoes";
$OAR = "Zona por evitar";
$TotalScoreTooBig = "Calificación total es demasiado grande";
$InvalidQuestionType = "Tipo de pregunta no válido";
$ShowScoreAndRightAnswer = "Modo auto-evaluación: mostrar la puntuación y las respuestas esperadas";
$DoNotShowScoreNorRightAnswer = "Modo examen: No mostrar nada (ni puntuación, ni respuestas)";
$LoadUsersExtraData = "Cargar los datos extra de usuarios";
$StartTest = "Iniciar la prueba";
$SaveForNow = "Guardar y continuar";
$QuestionsToReview = "Preguntas que desea comprobar";
$QuestionWithNoAnswer = "Preguntas sin responder";
$ValidateAnswers = "Validar respuestas";
$ReviewQuestions = "Revisar las preguntas seleccionadas";
$YouTriedToResolveThisExerciseEarlier = "Ya intentó resolver esta pregunta anteriormente";
$ThereAreNoQuestionsForThisExercise = "En este ejercicio no hay preguntas disponibles";
$ContinueTest = "Continuar el ejercicio";
$XQuestionsWithTotalScoreY = "%d preguntas, con un resultado máximo (todas preguntas) de %s.";
$QuestionLowerCase = "Pregunta minúsculas";
$QuestionsLowerCase = "Preguntas minúsculas";
$Category = "Categoría";
$BackToTestList = "Regreso a lista de ejercicios";
$CategoryDescription = "Descripción de categoría";
$BackToCategoryList = "Regreso a la lista de categorías";
$AddCategoryNameAlreadyExists = "Este nombre de categoría ya existe. Por favor indique otro nombre.";
$CannotDeleteCategory = "No se pudo eliminar la categoría";
$CannotDeleteCategoryError = "Error: no se pudo borrar la categoría";
$CannotEditCategory = "No se pudo editar la categoría";
$ModifyCategory = "Modificar categoría";
$ModifyCategoryError = "No se pudo modificar la categoría";
$AllCategories = "Todas categorías";
$AllGroups = "Todos grupos";
$FilterByGroup = "Filtrar por grupo";
$CreateQuestionOutsideExercice = "Crear pregunta fuera de cualquier ejercicio";
$ChoiceQuestionType = "Escoger tipo de pregunta";
$YesWithCategoriesSorted = "Sí, con categorías ordenadas";
$YesWithCategoriesShuffled = "Sí, con categorías desordenadas";
$ManageAllQuestions = "Gestionar todas las preguntas";
$MustBeInATest = "Tiene que estar en un ejercicio";
$PleaseSelectSomeRandomQuestion = "Por favor seleccione una pregunta aleatoria";
$RemoveFromTest = "Quitar del ejercicio";
$AddQuestionToTest = "Agregar pregunta al ejercicio";
$QuestionByCategory = "Pregunta por categoría";
$QuestionUpperCaseFirstLetter = "Pregunta con primera letra mayúscula";
$QuestionCategory = "Categoría de preguntas";
$AddACategory = "Añadir categoría";
$CategoryName = "Nombre de categoría";
$AddTestCategory = "Añadir categoría de ejercicios";
$AddCategoryDone = "Categoría añadida con éxito";
$NbCategory = "Número de categorías";
$DeleteCategoryAreYouSure = "¿Está segura que desea eliminar esta categoría?";
$DeleteCategoryDone = "Categoría eliminada";
$EditCategory = "Editar categoría";
$MofidfyCategoryDone = "Categoría modificada";
$NoCategory = "No hay categoría";
$NotInAGroup = "No está en ningún grupo";
$DoFilter = "Filtrar";
$ByCategory = "Por categoría";
$ResultsNotRevised = "Resultados no revisados";
$ResultNotRevised = "Resultado no revisado";
$NumberOfStudentsWhoTryTheExercise = "Número de estudiantes quienes han intentado el ejercicio";
$LowestScore = "Resultado mínimo obtenido";
$HighestScore = "Resultado máximo obtenido";
$MaximumScore = "Resultado máximo";
$NotRevised = "No revisado";
$PreviousQuestion = "Pregunta anterior";
$Options = "Opciones";
$RandomQuestionByCategory = "Preguntas al azar por categoría";
$QuestionDisplayCategoryName = "Mostrar la categoría de pregunta";
$ReviewAnswers = "Revisar mis respuestas";
$TextWhenFinished = "Texto apareciendo al finalizar la prueba";
$Validated = "Corregido";
$NotValidated = "Sin corregir";
$Revised = "Revisado";
$SelectAQuestionToReview = "Seleccione una pregunta por revisar";
$ReviewQuestionLater = "Marcar para revisar después";
$NumberStudentWhoSelectedIt = "Número de estudiantes quienes la seleccionaron";
$QuestionsAlreadyAnswered = "Preguntas ya respondidas";
$StudentsWhoAreTakingTheExerciseRightNow = "Estudiantes que realizan el ejercicio en este momento";
$ReportByQuestion = "Reporte por pregunta";
$LiveResults = "Resultados en vivo";
$RecordAnswer = "Grabar respuesta";
$UseTheMessageBelowToAddSomeComments = "Utilizar el siguiente campo de texto para escribir un comentario al profesor";
$SendRecord = "Enviar grabación";
$DownloadLatestRecord = "Descargar grabación";
$OralExpression = "Expresión Oral";
$CongratulationsYouPassedTheTest = "Felicitaciones ha aprobado el ejercicio.";
$YouDidNotReachTheMinimumScore = "No ha alcanzado el puntaje mínimo.";
$EndTest = "Terminar ejercicio";
$PassPercentage = "Porcentaje de éxito";
$NoCategorySelected = "No hay una categoría seleccionada";
$ExerciseAverage = "Media del ejercicio";
$NoNegativeScore = "Sin puntos negativos";
$GlobalMultipleAnswer = "Respuesta múltiple global";
$AllQuestionsShort = "Todas";
$ProblemsRecordingUploadYourOwnAudioFile = "Tiene problemas para grabar? Mande su propio fichero audio.";
?>