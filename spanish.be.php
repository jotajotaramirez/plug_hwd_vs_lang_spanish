<?php
/**
 *    @version 1.0
 *    @package hwdVideoShare
 *    @copyright Juan José Ramírez Escribano
 *    @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 ***
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 ***
 *    New Language Definitions are located at bottom of file
 *    DEFINITIONS HAVE FORM
 *    ---------------------
 *    DEFINE("_HWDVIDS_NAV_VIDEOS","Videos"); // Videos
 *           \___________________/  \_____/      \____/
 *            |                 |    |    \_____  \   \_____________________
 *            | PHP LANGUAGE    |    | LANGUAGE \__ \    COPY OF ORIGINAL   |
 *            | DEFINTIONS      |    | TRANSLATION |  \  ENGLISH DEFINITION |
 *            |_________________|    |_____________|    \___________________|
 ***
 *    TRANSLATOR CREDITS CAN GO HERE::
 *    ORIGINAL ENGLISH FILE BY HIGHWOOD DESIGN
 **/
defined( '_JEXEC' ) or die( 'No está permitido acceder directamente aquí.' );

//Current Version

DEFINE("_HWDVIDS_TOOLBARTITLE","hwdVideoShare");
DEFINE("_HWDVIDS_HOME_01","Bienvenido a hwdVideoShare");

//Backend Section Headers

DEFINE("_HWDVIDS_SECTIONHEAD_VIDEOS","Vídeos");
DEFINE("_HWDVIDS_SECTIONHEAD_CATS","Categorías");
DEFINE("_HWDVIDS_SECTIONHEAD_GROUPS","Grupos");
DEFINE("_HWDVIDS_SECTIONHEAD_APPROVALS","Pendientes de aprobación");
DEFINE("_HWDVIDS_SECTIONHEAD_FLAGGED","Vídeos denunciados");
DEFINE("_HWDVIDS_SECTIONHEAD_COMMENTS","Comentarios");
DEFINE("_HWDVIDS_SECTIONHEAD_SS","Ajustes de servidor");
DEFINE("_HWDVIDS_SECTIONHEAD_GS","Ajustes generales");
DEFINE("_HWDVIDS_SECTIONHEAD_BCUP","Hacer copia de seguridad");
DEFINE("_HWDVIDS_SECTIONHEAD_RSTR","Restaurar datos");
DEFINE("_HWDVIDS_SECTIONHEAD_PLUGIN","Gestión de extensiones");
DEFINE("_HWDVIDS_SECTIONHEAD_CONVERTOR","Conversor de vídeo");
DEFINE("_HWDVIDS_SECTIONHEAD_HOME","Página principal");
DEFINE("_HWDVIDS_SECTIONHEAD_IMPORT","Importar datos");
DEFINE("_HWDVIDS_SECTIONHEAD_CLUP","Mantenimiento");

//Backend Filter Text

DEFINE("_HWDVIDS_SEARCHV","Buscar Vídeos");
DEFINE("_HWDVIDS_SEARCHC","Buscar Categorías");
DEFINE("_HWDVIDS_SEARCHG","Buscar Grupos");
DEFINE("_HWDVIDS_RPP","Resultados por página");

//Backend Alert Text

DEFINE("_HWDVIDS_ALERT_ADMIN_VIDPUB"," vídeo(s) publicado(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_VIDUNPUB","El vídeo ha sido despublicado");
DEFINE("_HWDVIDS_ALERT_ADMIN_VIDFEAT"," vídeo(s) destacado(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_VIDUNFEAT"," vídeo(s) no destacado(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_VIDDEL"," vídeo(s) borrado(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_VIDAPP"," vídeo(s) aprobado(s) y publicado(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_GPUB"," grupo(s) publicado(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_GUNPUB"," grupo(s) despublicado(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_GFEAT"," grupo(s) destacado(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_GUNFEAT"," grupo(s) no destacado(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_GDEL"," grupo(s) eliminado");
DEFINE("_HWDVIDS_ALERT_ADMIN_CATPUB"," categoría(s) publicada(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_CATUNPUB"," categoría(s) no publicada(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_CATDEL"," categoría(s) eliminada");
DEFINE("_HWDVIDS_ALERT_ADMIN_COMPUB"," comentario(s) publicado(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_COMUNPUB"," comentario(s) no publicado(s)");
DEFINE("_HWDVIDS_ALERT_ADMIN_FLAGMDEL"," vídeo denunciado eliminado");
DEFINE("_HWDVIDS_ALERT_ADMIN_FLAGMREAD"," vídeo denunciado ignorado");
DEFINE("_HWDVIDS_ALERT_ADMIN_PERMDELSUC","Vídeo antiguo borrado correctamente");
DEFINE("_HWDVIDS_ALERT_CATSAVED","Categoría guardada");
DEFINE("_HWDVIDS_ALERT_GRPSAVED","Grupo guardado");
DEFINE("_HWDVIDS_ALERT_VIDSAVED","Vídeo guardado");
DEFINE("_HWDVIDS_ALERT_ADMIN_GCONFUNWRT","¡El fichero de ajustes generales no se puede escribir! Asegúrate de que se pueda escribir antes de acceder a esta página o guardar nuevos ajustes: <div style='text-indent: 30px;'>".JPATH_SITE  ."/administrator/components/com_hwdvideoshare/config.hwdvideoshare.php</div>");
DEFINE("_HWDVIDS_ALERT_ADMIN_SCONFUNWRT","¡El fichero de ajustes de servidor no se puede escribir! Asegúrate de que se pueda escribir antes de acceder a esta página o guardar nuevos ajustes: <div style='text-indent: 30px;'>".JPATH_SITE  ."/administrator/components/com_hwdvideoshare/serverconfig.hwdvideoshare.php</div>");
DEFINE("_HWDVIDS_ALERT_ACMETH1","Método 1 [Ejecución de fondo directa]");
DEFINE("_HWDVIDS_ALERT_ACMETH2","Método 2 [Ejecución de fondo WGet]");
DEFINE("_HWDVIDS_ALERT_ACMETH3","Método 3 [Ejecución de fondo WGet]");
DEFINE("_HWDVIDS_ALERT_ERRFTP","Ha habido algún tipo de error mientras se procesaba la información de vídeo FTP. Por favor, inténtalo de nuevo más tarde.");
DEFINE("_HWDVIDS_ALERT_SUCFTP","¡Correcto! La información de tu vídeo ha sido añadida. No olvides subir el fichero de vídeo.");
DEFINE("_HWDVIDS_ALERT_BE_QFCQFT","Este vídeo está esperando a ser convertido o tomar una miniatura. Se mostrará más información una vez el proceso haya sido completado.");
DEFINE("_HWDVIDS_ALERT_BE_VIDDEL","Este vídeo ha sido borrado. Puedes eliminarlo permanentemente utilizando las herramientas de mantenimiento.");
DEFINE("_HWDVIDS_ALERT_VURLWRONG","La URL del vídeo que has introducido no es válida, por favor completa el formulario de nuevo. Ninguna información ha sido guardada.");
DEFINE("_HWDVIDS_ALERT_TURLWRONG","La URL de miniatura que has introducido no es válida, por favor completa el formulario de nuevo. Ninguna información ha sido guardada.");
DEFINE("_HWDVIDS_ALERT_NOREMURL","Por favor, introduce la URL del fichero de vídeo");
DEFINE("_HWDVIDS_ALERT_NOREMTHUMB","Por favor, introduce la URL de la miniatura del vídeo");
DEFINE("_HWDVIDS_ALERT_AC_YES","Este método no funciona en tu servidor.");
DEFINE("_HWDVIDS_ALERT_AC_NO","Este método no funciona en tu servidor.");
DEFINE("_HWDVIDS_ALERT_MISSINGINFO","No has rellenado todos los campos, por favor completa el formulario de nuevo. No se ha guardado ninguna información.");
DEFINE("_HWDVIDS_ALERT_SUCRESETFCONV","Se han reiniciado las conversiones fallidas con éxito");
DEFINE("_HWDVIDS_ALERT_ADMIN_SETNOTSAVED","¡Tus ajustes no pudieron ser guardados!");
DEFINE("_HWDVIDS_ALERT_MISSINGVIDFILE","*** ¡No se encuentra este fichero! ***");
DEFINE("_HWDVIDS_ALERT_CATCONTAINSVIDS","Esta categoría contiene vídeos. Necesitas borrarlos todos primero antes de borrar la categoría.");
DEFINE("_HWDVIDS_ALERT_ADMIN_SETSAVED","Tus ajustes han sido guardados");
DEFINE("_HWDVIDS_ALERT_PARENTNOTSELF","No puedes establecer como categoría padre ella sí misma.");
DEFINE("_HWDVIDS_ALERT_MANCHMOD","Necesitas hacer que el directorio se pueda escribir:");
DEFINE("_HWDVIDS_ALERT_MANMKDIR","Necesitas crear a mano este directorio:");

//Admin Email Notification Text

DEFINE("_HWDVIDS_MAIL_SUBJECT1","Nuevo vídeo creado el ");
DEFINE("_HWDVIDS_MAIL_SUBJECT2","Nuevo grupo creado el ");
DEFINE("_HWDVIDS_MAIL_SUBJECT3","Nuevo comentario creado el ");
DEFINE("_HWDVIDS_MAIL_SUBJECT4","Nuevo media denunciado el ");
DEFINE("_HWDVIDS_MAIL_BODY0","Ha habido una nueva subida de vídeo el ");
DEFINE("_HWDVIDS_MAIL_BODY1","El vídeo se llama ");
DEFINE("_HWDVIDS_MAIL_BODY2","Si necesitas aprobar el vídeo por favor accede a la sección de adminsitración.");
DEFINE("_HWDVIDS_MAIL_BODY3","Ha habido un nuevo grupo creado el ");
DEFINE("_HWDVIDS_MAIL_BODY4","El grupo se llama ");
DEFINE("_HWDVIDS_MAIL_BODY5","Si necesitas publicar manualmente este grupo por favor accede a la sección de administración.");
DEFINE("_HWDVIDS_MAIL_BODY6","Ha habido un nuevo comentario escrito el ");
DEFINE("_HWDVIDS_MAIL_BODY7","Commentario: ");
DEFINE("_HWDVIDS_MAIL_BODY8","Si necesitas publicar manualmente este comentario por favor accede a la sección de administración.");
DEFINE("_HWDVIDS_MAIL_BODY9","Alguien ha denunciado este vídeo el ");
DEFINE("_HWDVIDS_MAIL_BODY10","Para ver el vídeo por favor visita la siguiente página:");
DEFINE("_HWDVIDS_MAIL_BODY11","Si necesitas editar o borrar el vídeo por favor accede a la sección de administración.");
DEFINE("_HWDVIDS_MAIL_BODY12","Para ver el grupo por favor accede a la siguiente página:");

// Toolbar

DEFINE("_HWDVIDS_TOOLBAR_HOME","Página principal");
DEFINE("_HWDVIDS_TOOLBAR_FEATURE","Destacar");
DEFINE("_HWDVIDS_TOOLBAR_UNFEATURE","No destacar");
DEFINE("_HWDVIDS_TOOLBAR_EDIT","Editar");
DEFINE("_HWDVIDS_TOOLBAR_DELETE","Borrar");
DEFINE("_HWDVIDS_TOOLBAR_REMOVE","Eliminar");
DEFINE("_HWDVIDS_TOOLBAR_PUBLISH","Publicar");
DEFINE("_HWDVIDS_TOOLBAR_UNPUBLISH","Despublicar");
DEFINE("_HWDVIDS_TOOLBAR_APPROVE","Aprobar");
DEFINE("_HWDVIDS_TOOLBAR_BKUP","Enviar ahora");
DEFINE("_HWDVIDS_TOOLBAR_RUN","Ejecutar herramientas");
DEFINE("_HWDVIDS_TOOLBAR_RESTOREDEFAULTS","Restaurar valores por defecto");

//Backend Selects

DEFINE("_HWDVIDS_SELECT_PUBLIC","Acceso público");
DEFINE("_HWDVIDS_SELECT_REG","Sólo usuarios registrados");
DEFINE("_HWDVIDS_SELECT_ALLOWCOMMS","Permitir comentarios");
DEFINE("_HWDVIDS_SELECT_DONTALLOWCOMMS","No permitir comentarios");
DEFINE("_HWDVIDS_SELECT_ALLOWEMB","Permitir incrustar");
DEFINE("_HWDVIDS_SELECT_DONTALLOWEMB","No permitir incrustar");
DEFINE("_HWDVIDS_SELECT_ALLOWRATE","Permitir votos");
DEFINE("_HWDVIDS_SELECT_DONTALLOWRATE","No permitir votos");
DEFINE("_HWDVIDS_SELECT_REQUIREAPP","Requerir aprobación");
DEFINE("_HWDVIDS_SELECT_DONTREQUIREAPP","No requerir aprobación");
DEFINE("_HWDVIDS_SELECT_ORDERING","Orden");
DEFINE("_HWDVIDS_SELECT_UPLDDATE","Fecha de subida");
DEFINE("_HWDVIDS_SELECT_NAME","Nombre");
DEFINE("_HWDVIDS_SELECT_HITS","Reproducciones");
DEFINE("_HWDVIDS_SELECT_RATING","Puntuación");
DEFINE("_HWDVIDS_SELECT_RANDOM","Aleatorio");
DEFINE("_HWDVIDS_SELECT_NOVIDS","Número de vídeos");
DEFINE("_HWDVIDS_SELECT_NOSUBS","Número de subcategorías");
DEFINE("_HWDVIDS_SELECT_NOPAR","Sin padre");
DEFINE("_HWDVIDS_SELECT_EVERYONE","Todo el mundo");
DEFINE("_HWDVIDS_SELECT_ALLREGUSER","Sólo usuarios registrados");

//Tab Titles

DEFINE("_HWDVIDS_TAB_SETUP","Ajustes");
DEFINE("_HWDVIDS_TAB_UPLDS","Subidas");
DEFINE("_HWDVIDS_TAB_APVLS","Aprobaciones");
DEFINE("_HWDVIDS_TAB_CONVNS","Conversiones");
DEFINE("_HWDVIDS_TAB_NOTFY","Notificaciones");
DEFINE("_HWDVIDS_TAB_INTGTN","Integraciones");
DEFINE("_HWDVIDS_TAB_ACCESS","Acceso");
DEFINE("_HWDVIDS_TAB_BASIC","Básico");
DEFINE("_HWDVIDS_TAB_SHARING","Compartir");
DEFINE("_HWDVIDS_TAB_FTP","Subida FTP");
DEFINE("_HWDVIDS_TAB_REMOTE","Remoto");
DEFINE("_HWDVIDS_TAB_SQL","Importar SQL");
DEFINE("_HWDVIDS_TAB_CSV","Importar CSV");
DEFINE("_HWDVIDS_TAB_PHPM","PHPMotion");
DEFINE("_HWDVIDS_TAB_VCLIP","vClip");
DEFINE("_HWDVIDS_TAB_ALLVIDS","Todos los vídeos");
DEFINE("_HWDVIDS_TAB_FEATV","Destacado");
DEFINE("_HWDVIDS_TAB_STATS","Estadísticas");
DEFINE("_HWDVIDS_TAB_INFO","Información");
DEFINE("_HWDVIDS_TAB_TP","Terceros");
DEFINE("_HWDVIDS_TAB_SHARES","Compartir");
DEFINE("_HWDVIDS_TAB_SETTS","Ajustes");
DEFINE("_HWDVIDS_TAB_XML","Listas de reproducción XML");
DEFINE("_HWDVIDS_TAB_SEYRET","Seyret");
DEFINE("_HWDVIDS_TAB_ACHT","ACHTube");
DEFINE("_HWDVIDS_TAB_TPV","Vídeos de terceros");
DEFINE("_HWDVIDS_TAB_VIDEO","Vídeos");
DEFINE("_HWDVIDS_TAB_GROUPS","Grupos");
DEFINE("_HWDVIDS_TAB_SCAN","Scan");
DEFINE("_HWDVIDS_TAB_RTMP","RTMP");
DEFINE("_HWDVIDS_TAB_PERMISSIONS","Permisos");

//Information Page

DEFINE("_HWDVIDS_HOME_02","hwdVideoShare es un script php para compartir vídeos open source, el cual es un componente nativo del CMS Joomla.");
DEFINE("_HWDVIDS_HOME_03","Ha sido diseñado para ser usado en páginas de compartición de vídeo en redes sociales para permitir la compartición de vídeo entre los usuarios. Tiene funcionalidades similares a otras páginas de compartición de vídeo como <a href=\"http://www.youtube.com\" target=\"_blank\">You Tube</a>.");
DEFINE("_HWDVIDS_HOME_04","Esta es una versión Alfa. Aún hay varias incidencias que Highwood Design está tratando de resolver.");
DEFINE("_HWDVIDS_HOME_05","Este programa es distribuido con la esperanza de que sea útil pero ¡SIN NINGUNA GARANTÍA!");
DEFINE("_HWDVIDS_HOME_06","¿Cómo funciona hwdVideoShare?");
DEFINE("_HWDVIDS_HOME_07","Diagrama esquemático de hwdVideoShare");
DEFINE("_HWDVIDS_HOME_08","Requisitos");
DEFINE("_HWDVIDS_HOME_09","o");
DEFINE("_HWDVIDS_HOME_10","(Joomla 1.5 requiere Legacy Support)");
DEFINE("_HWDVIDS_HOME_11","Conversión de vídeos después de subirse [queuedforconversion]");
DEFINE("_HWDVIDS_HOME_12","Si se añade un vídeo subiendo un fichero a tu servidor necesitará ser convertido por un programa en tu servidor antes de mostrarse en la página. Puedes comprobar el estado de los vídeos subidos haciendo click en el menú <b>Vídeo</b> en la sección de administración de hwdVideoShare.");
DEFINE("_HWDVIDS_HOME_13","Puedes configurar hwdVideoShare de forma que envíe los vídeos directamente al conversor inmediatamente después de que una subida sea completada. Ve a la opción del menú <b>Ajustes Generales</b> y haz click en la pestaña de <b>Conversiones</b>.");
DEFINE("_HWDVIDS_HOME_14","Si los nuevos vídeos no están siendo convertidos puedes utilizar el conversor manual de hwdVideoShare. Esto dará mucha más información sobre porqué los vídeos no están siendo convertidos.");
DEFINE("_HWDVIDS_HOME_15","El script de conversión no debe ser interrumpido mientras está siendo ejecutado.");
DEFINE("_HWDVIDS_HOME_16","Para la <a href=\"http://joomla.highwooddesign.co.uk\" target=\"_blank\">documentación</a> sobre cómo depurar el proceso de conversión por favor visita la página web de Highwood Design.");
DEFINE("_HWDVIDS_HOME_17","Si no tienes los programas requeridos instalados en tu servidor entonces las conversiones de vídeo fallarán.");
DEFINE("_HWDVIDS_HOME_18","Puedes desactivar los programas de conversión en hwdVideoShare, pero en este caso hwdVideoShare tendrá sólo algunas de las funciones.");
DEFINE("_HWDVIDS_HOME_19","Los vídeos que se añadan de páginas de terceros (como como YouTube) no necesitan ser convertidos y aparecerán inmediatamente en la página. Si tu intención es usar hwdVideoShare sólo con vídeos de terceros como YouTube no necesitarás ninguno de los programas para que hwdVideoShare funcione correctamente.");
DEFINE("_HWDVIDS_HOME_20","Crear miniaturas [queuedforthumbnail]");
DEFINE("_HWDVIDS_HOME_21","Puedes configurar hwdVideoShare para que no recodifique ficheros FLV cuando se suban. Para hacer esto ve al menú <b>Ajustes generales</b> y haz click en la pestaña <b>Conversiones</b>.");
DEFINE("_HWDVIDS_HOME_22","Si eliges no recodificar los ficheros FLV entonces todas las subidas se marcarán como \"queuedforthumbnail\". Cuando el script de conversión está ejecutándose el fichero FLV se copia directamente al directorio de subidas, pero no es recodificado. Se creará una miniatura del vídeo y la conversión será marcada como completada.");
DEFINE("_HWDVIDS_HOME_23","Vídeos de terceros");
DEFINE("_HWDVIDS_HOME_24","En lugard e subir vídeos a tu servidor tus usuarios pueden también añadir ficheros a terceros como YouTube y GoogleVideo.");
DEFINE("_HWDVIDS_HOME_25","Añadir vídeos de páginas de terceros significa que <b>no es necesario tener</b> MENCODER ni FFMPEG en tu servidor.");
DEFINE("_HWDVIDS_HOME_26","Agradecimientos");
DEFINE("_HWDVIDS_HOME_27","Highwood Design quiere agradecer a los siguientes excelentes proyectos:");
DEFINE("_HWDVIDS_HOME_28","Desarrollador");
DEFINE("_HWDVIDS_HOME_29","Lanzado bajo el");
DEFINE("_HWDVIDS_HOME_30","Soporte de documentación &#38;");
DEFINE("_HWDVIDS_HOME_31","Puedes leer una serie de artículos sobre documentación gratuitos en la página de  <a href=\"http://hwdmediashare.co.uk\" target=\"_blank\">Highwood Design</a>. Estos artículos cubren los aspectos básicos de la configuración de hwdVideoShare.");
DEFINE("_HWDVIDS_HOME_32","También puedes visitar los foros de discusión de Highwood Design donde puedes encontrar respuestas a cualquier pregunta o comenzar nuevas discusiones acerca de nuevos problemas o incidencias.");
DEFINE("_HWDVIDS_HOME_33","Te recomendamos encarecidamente <a href=\"http://hwdmediashare.co.uk\" target=\"_blank\">registrarte</a> en la página de Highwood Design para acceder a toda la documentación, foros, módulos, extensiones de community builder y mambots.");
DEFINE("_HWDVIDS_HOME_34","Sólo cuesta <b>algunas libras suscribirse</b> por un año y nos ayudarás a desarrollar nuevas y mejores extensiones.");

//Button Text

DEFINE("_HWDVIDS_BUTTON_PERMDELVIDS","Borrar permanentemente");
DEFINE("_HWDVIDS_BUTTON_PERMDELBKUP","Borrar el fichero de respaldo");
DEFINE("_HWDVIDS_BUTTON_PERMRESBKUP","Restaurar fichero");
DEFINE("_HWDVIDS_BUTTON_SAVE","Guardar");
DEFINE("_HWDVIDS_BUTTON_UPDT","Actualizar");
DEFINE("_HWDVIDS_BUTTON_CANX","Cancelar");
DEFINE("_HWDVIDS_BUTTON_RESETFCONV","REINICIAR CONVERSIONES FALLIDAS");
DEFINE("_HWDVIDS_BUTTON_FINSET","Finalizar configuración");
DEFINE("_HWDVIDS_BUTTON_SENDBKUP","Realizar copia de seguridad ahora");
DEFINE("_HWDVIDS_BUTTON_UPLOAD","Subir");
DEFINE("_HWDVIDS_BUTTON_IMPORT","Importar ahora");
DEFINE("_HWDVIDS_BUTTON_UNDOIMPORT","Deshacer importar ahora");

//Backend Server Settings

DEFINE("_HWDVIDS_PATHFFMPEG","Ruta a FFMPEG");
DEFINE("_HWDVIDS_SETT_PATHFFMPEG_DESC","La ruta completa a FFMPEG");
DEFINE("_HWDVIDS_PATHFLVTOOL2","Ruta a FLVTOOL2");
DEFINE("_HWDVIDS_SETT_PATHFLVTOOL2_DESC","Ruta completa del servidor a FLVTOOL2");
DEFINE("_HWDVIDS_PATHMENCODER","Ruta a MENCODER");
DEFINE("_HWDVIDS_SETT_PATHMENCODER_DESC","Ruta completa del servidor a MENCODER");
DEFINE("_HWDVIDS_PATHPHP","Ruta a PHP");
DEFINE("_HWDVIDS_SETT_PATHPHP_DESC","Ruta completa del servidor a PHP");
DEFINE("_HWDVIDS_PATHWGET","Ruta a WGET");
DEFINE("_HWDVIDS_SETT_PATHWGET_DESC","Ruta del servidor a WGET");
DEFINE("_HWDVIDS_PATHQTFS","Ruta a QT-FASTSTART");
DEFINE("_HWDVIDS_SETT_PATHQTFS_DESC","Ruta del servidor a QT-FASTSTART");

//Export

DEFINE("_HWDVIDS_EXPORT_TOEMAIL","A la dirección de correo");
DEFINE("_HWDVIDS_EXPORT_TOEMAIL_TT","Dirección de correo donde enviar el fichero de respaldo. Déjalo vacío para enviarlo al correo del sistema por defecto.");
DEFINE("_HWDVIDS_EXPORT_SUBJECT","Asunto");
DEFINE("_HWDVIDS_EXPORT_SUBJECT_TT","Asunto del correo de la copia de seguridad.");
DEFINE("_HWDVIDS_EXPORT_SUBJECT_DEFAULT","Copia de seguridad de hwdVideoShare en formato SQL");
DEFINE("_HWDVIDS_EXPORT_BODY","Cuerpo");
DEFINE("_HWDVIDS_EXPORT_BODY_TT","Cuerpo del correo de la copia de seguridad.");
DEFINE("_HWDVIDS_EXPORT_BODY_DEFAULT","Copia de seguridad de hwdVideoShare completada correctamente a las ");
DEFINE("_HWDVIDS_EXPORT_SUCCESS","¡Correcto! El correo de copia de seguridad se ha enviado.");
DEFINE("_HWDVIDS_EXPORT_DELETE0","Sin borrar el fichero de copia de seguridad");
DEFINE("_HWDVIDS_EXPORT_DELETE1","Borrando el fichero de copia de seguridad");
DEFINE("_HWDVIDS_EXPORT_TITLE","Exportar la copia de seguridad SQL al correo");

//Import

DEFINE("_HWDVIDS_IMPT_SQL_TITLE","Importar vídeos de un fichero de SQL de respaldo");
DEFINE("_HWDVIDS_IMPT_SQL_DESC","Esta función se debe usar sólamente para subir e importar un fichero de copia de seguridad creado por este programa. No itentes subir cualquier otro tipo de fichero.");
DEFINE("_HWDVIDS_IMPT_SQL_WARN","Ten una precaución extrema cuando utilices esta función. hwdVideoShare borrará todos los datos y los subirá a tu base de datos SQL, sobreescribiendo cualquier otro dato existente. Esto es incluso relativamente nuevo en hwdVideoShare. Asegúrate de hacer copia de seguridad de toda tu base de datos antes de utilizar esto por primera vez.");
DEFINE("_HWDVIDS_IMPT_REMOTE_TITLE","Añadir los vídeos desde un lugar remoto");
DEFINE("_HWDVIDS_IMPT_REMOTE_DESC","Utiliza esta herramienta para añadir vídeos de una fuente externa. La localización puede ser cualquier servidor siempre que el fichero sea públicamente accesible. Ten en cuenta que sólo puedes añadir vídeos soportados por el reproductor Adboe Flash (FLV, MP4, SWF).");
DEFINE("_HWDVIDS_IMPT_REMOTE_WARN","Utiliza esta herramienta sólamente para importar <b>vídeos estáticos</b>. Añadir un vídeo de terceros como YouTube o Vimeo no funcionará, por favor utiliza la pestaña de terceros para añadir estos vídeos.");
DEFINE("_HWDVIDS_IMPT_FTP_TITLE","Añadir vídeos por FTP");
DEFINE("_HWDVIDS_IMPT_FTP_DESC","Utiliza esta herramienta para añadir manualmente vídeos al FTP de uno en uno. Puedes subir vídeos grandes y después añadir la información sobre el vídeo utilizando el formulario de abajo. Por favor, ten en cuenta que sólo puedes añadir vídeos que soporten el reproductor de Adobe Flash (FLV, MP4, SWD). Puedes descargar <a href=\"http://www.download.com/\" target=\"_blank\">un programa gratuito</a> para windows que puede convertir los vídeos al formato FLV. Por favor, sigue las instrucciones con cuidado.");
DEFINE("_HWDVIDS_IMPT_FTP_DESC1","Renombra el fichero a ");
DEFINE("_HWDVIDS_IMPT_FTP_DESC2","Utiliza FTP para subir el fichero de vídeo a tu servidor");
DEFINE("_HWDVIDS_IMPT_FTP_DESC3","Sube el fichero de vídeo a este directorio de tu servidor:<br /><b>".JPATH_SITE."/hwdvideos/uploads/</b>");
DEFINE("_HWDVIDS_IMPT_FTP_DESC4","Rellena el formulario de abajo con información sobre el vídeo y haz click en guardar");
DEFINE("_HWDVIDS_IMPT_CSV_TITLE","Importar vídeos de un fichero CSV");
DEFINE("_HWDVIDS_IMPT_CSV_DESC","Esta característica sólo debe usarse para importar información de vídeos en bloque utilizando datos de CSV. Después los vídeos se pueden copiar (por FTP) al directorio de vídeos.");
DEFINE("_HWDVIDS_IMPT_CSV_WARN","Ten especial cuidado cuando utilices esta función!. hwdVideoShare borrará todos los datos y los subirá a tu base de datos SQL, sobreescribiendo cualquier otro dato existente. Esto es incluso relativamente nuevo en hwdVideoShare. Asegúrate de hacer copia de seguridad de toda tu base de datos antes de utilizar esto por primera vez.");
DEFINE("_HWDVIDS_IMPT_MT","Tipo de vídeo");
DEFINE("_HWDVIDS_IMPT_CSV_DL","Delimitador");
DEFINE("_HWDVIDS_IMPT_CSV_ME","Errores máximos permitidos");
DEFINE("_HWDVIDS_IMPT_SEYRET_TITLE","Importar vídeos de Seyret");
DEFINE("_HWDVIDS_IMPT_SEYRET_DESC","Esta función se puede utilizar para importar vídeos de Seyret.");
DEFINE("_HWDVIDS_IMPT_SEYRET_WARN"," Seyret no está instalado en este servidor de Joomla. No puedes importar ningún vídeo de Seyret.");
DEFINE("_HWDVIDS_IMPT_TP_TITLE","Importar vídeos de terceros");
DEFINE("_HWDVIDS_IMPT_TP_DESC","Esta función se debe utilizar para importar vídeos de terceros. Debes tener una extensión instalada para las páginas desde las cuales quieras añadir vídeos.");
DEFINE("_HWDVIDS_IMPT_RTMP_TITLE","Añadir flujos de RTMP de servidores multimedia");
DEFINE("_HWDVIDS_IMPT_RTMP_DESC","Los vídeos en formato FLV y MP4 pueden ser transmitidos usando servidores RTMP.");
DEFINE("_HWDVIDS_IMPT_RTMP_WARN","Utiliza sólo esta herramienta para importar <b>flujos RTMP</b>.");


//Information

DEFINE("_HWDVIDS_INFO_CONFIRMBACKDEL","¿Estás seguro de que quieres eliminar los vídeos seleccionados??");
DEFINE("_HWDVIDS_INFO_CONFIRMBACKCDEL","¿Estás seguro de que quieres eliminar las categorías seleccionadas?");
DEFINE("_HWDVIDS_INFO_CONFIRMBACKGDEL","¿Estás seguro de que quieres eliminar los grupos seleccionados?");
DEFINE("_HWDVIDS_INFO_CONFIRMBACKPDEL","¿Estás seguro de que quieres eliminar las extensiones seleccionadas?");
DEFINE("_HWDVIDS_INFO_NOTDEVELOPED","Esta característica estará disponible en versiones futuras");
DEFINE("_HWDVIDS_INFO_PERMDEL1","Cuando borres los vídeos los ficheros permanecerán en el servidor hasta que los borres permanentemente utilizando esta herramienta.");
DEFINE("_HWDVIDS_INFO_PERMDEL2","Hay actualmente ");
DEFINE("_HWDVIDS_INFO_PERMDEL3"," ficheros de vídeo que pueden ser permanentemente eliminados.");
DEFINE("_HWDVIDS_INFO_PERMDEL4","Por favor, confirma que quieres eliminar permanentemente los ficheros sin usar.");
DEFINE("_HWDVIDS_INFO_PERMDEL5","No hay ficheros de vídeo para eliminar");
DEFINE("_HWDVIDS_INFO_CLUP1","Comprueba los errores en tus tablas de la base de datos y arréglalos.");
DEFINE("_HWDVIDS_INFO_CLUP2","Esta característica estará disponible en la primera versión estable el próximo año.");
DEFINE("_HWDVIDS_INFO_CONFIRMRESBKUP","ADVERTENCIA!!! Esto eliminará la información de tu base de datos actual y la reemplazará con la copia de seguridad. Por favor, asegúrate de que has leído toda la documentación antes de seguir. ¿Quieres continuar?");
DEFINE("_HWDVIDS_INFO_QFCON","Vídeos en cola para ser convertidos");
DEFINE("_HWDVIDS_INFO_QFTUM","Vídeos en cola para crear una miniatura");
DEFINE("_HWDVIDS_INFO_QFSWF","Vídeos en cola para procesar SWF");
DEFINE("_HWDVIDS_INFO_QFMP4","Vídeos en cola para para procesar MP4");
DEFINE("_HWDVIDS_INFO_QFTRG","Vídeos en cola para para regenerar las miniaturas");
DEFINE("_HWDVIDS_INFO_QFDRC","Vídeos en cola para recalcular la duración");
DEFINE("_HWDVIDS_INFO_QFING","Vídeos en cola para ser convertidos");
DEFINE("_HWDVIDS_INFO_CONFIGF1","El fichero de configuración es");
DEFINE("_HWDVIDS_INFO_CONFIGF2","escribible");
DEFINE("_HWDVIDS_INFO_CONFIGF3","no escribible");
DEFINE("_HWDVIDS_INFO_NOPLUGIN","Lo siento, este vídeo ya no puede ser reproducido en esta página.");
DEFINE("_HWDVIDS_INFO_CHOOSECAT","Elige una categoría");
DEFINE("_HWDVIDS_INFO_NOCATS","No hay categorías disponibles");
DEFINE("_HWDVIDS_INFO_TPDRFAIL","La duración del vídeo no puede encontrarse");
DEFINE("_HWDVIDS_INFO_ENABLEJAVA","Por favor, activa Javascript en tu navegador o utiliza un navegador diferente para ver este vídeo.  Puede que necesites también <a href=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\" target=\"_blank\">actualizar flash player</a>.");
DEFINE("_HWDVIDS_INFO_ANYCAT","Buscar todas las categorías");
DEFINE("_HWDVIDS_INFO_TPPROCESSFAIL","El código del vídeo que has introducido no puede ser procesado. Tu vídeo no se ha añadido.<br /><br />");
DEFINE("_HWDVIDS_INFO_TPTITLEFAIL","No se puede encontrar el título del vídeo");
DEFINE("_HWDVIDS_INFO_TPDESCFAIL","No se puede encontrar la descripción del vídeo.");
DEFINE("_HWDVIDS_INFO_TPKWFAIL","No se pueden encontrar las palabras clave del vídeo");
DEFINE("_HWDVIDS_INFO_TAGS","Las etiquetas son palabras clave que se utilizan para explicar tus vídeos y deben estar separados por comas. (vacaciones, playa, España, etc)");
DEFINE("_HWDVIDS_INFO_REQUIREDFIELDS","indica un campo obligatorio");

//Details

DEFINE("_HWDVIDS_DETAILS_VIDSTATUS_Y","Aprobado");
DEFINE("_HWDVIDS_DETAILS_VIDSTATUS_QFC","En cola para conversión de vídeo");
DEFINE("_HWDVIDS_DETAILS_VIDSTATUS_QFT","En cola para creación de miniaturas");
DEFINE("_HWDVIDS_DETAILS_VIDSTATUS_QFSWF","En cola para procesar SWF");
DEFINE("_HWDVIDS_DETAILS_VIDSTATUS_QFMP4","En cola para procesar MP4");
DEFINE("_HWDVIDS_DETAILS_VIDSTATUS_P","Pendiente de aprobación");
DEFINE("_HWDVIDS_DETAILS_VIDSTATUS_D","Borrado");
DEFINE("_HWDVIDS_DETAILS_SOTS","Almacenado en este servidor");
DEFINE("_HWDVIDS_DETAILS_TIMES","veces");
DEFINE("_HWDVIDS_DETAILS_REMSER","En un servidor remoto");
DEFINE("_HWDVIDS_DETAILS_VIEWVID","Ver Vídeo");

//Title

DEFINE("_HWDVIDS_TITLE_DELETEOLDVIDS","Permanentemente borra los ficheros de vídeo");
DEFINE("_HWDVIDS_TITLE_CLUPBDTABLES","Limpieza de tablas de la base de datos");
DEFINE("_HWDVIDS_TITLE_EDITVID","Editar detalles del vídeo");
DEFINE("_HWDVIDS_TITLE_FINSET","Finalizar la configuración de hwdVideoShare");
DEFINE("_HWDVIDS_TITLE_HWDVCONVERTOR","Conversor de vídeo");
DEFINE("_HWDVIDS_TITLE_SS","Ajustes de servidor");

//General Dedicated Backend

DEFINE("_HWDVIDS_MAIN_RN","Ejecutar ahora");
DEFINE("_HWDVIDS_MAIN_DRN","No ejecutar ahora");
DEFINE("_HWDVIDS_MAIN_RIR","Ejecutar si fuera necesario");
DEFINE("_HWDVIDS_MAIN_LR","Última ejecución:");
DEFINE("_HWDVIDS_MAIN_FDE","Arreglar los errores de la base de datos SQL");
DEFINE("_HWDVIDS_MAIN_RDS","Recontar las estadísticas de la base de datos SQL");
DEFINE("_HWDVIDS_MAIN_AAL","Archivar los registros de acceso");
DEFINE("_HWDVIDS_INS_SAMP_CATS","Instalar & publicar categorías de ejemplo");
DEFINE("_HWDVIDS_INS_YT","Instalar & publicar la extensión de YouTube");
DEFINE("_HWDVIDS_INS_GV","Instalar & publicar la extensión de GoogleVideo");
DEFINE("_HWDVIDS_JW_LIC","hwdVideoShare tiene un sistema de extensión de <b><i>reproductor de vídeo</i></b> integrado. Este sistema permite instalar reproductores de vídeo populares de terceros y usarlos con este programa. Esto te da la capacidad de utilizar los reproductores de código abierto más potentes junto con la galería de vídeo de hwdVideoShare. Puedes utilizar el reproductor <a href='http://www.jeroenwijering.com/?item=JW_FLV_Player' target='_blank'>JW FLV Media Player</a> con hwdVideoShare, pero la versión 4 de JW FLV Media Player tiene una <a href='http://creativecommons.org/licenses/by-nc-sa/3.0/' target='_blank'>licencia no comercial</a>.");
DEFINE("_HWDVIDS_JW_AGREE","Acepto los términos de licencia no comercial de JW FLV Media Player");
DEFINE("_HWDVIDS_JW_DECLINE","No acepto los términos de licencia no comercial de JW FLV Media Player");
DEFINE("_HWDVIDS_JW_EXISTING","Poseo una licencia comercial de JW FLV Media Player");
DEFINE("_HWDVIDS_JW_SKIP","No quiero instalar JW FLV Media Player");
DEFINE("_HWDVIDS_REGENTHUMB","Recrear las miniaturas locales");
DEFINE("_HWDVIDS_RECALDUR","Recalcular las duraciones de vídeo");
DEFINE("_HWDVIDS_RUNCON","Debes ejecutar el conversor ahora, pues de otro modo tus vídeos no aparecerán en la página web.");
DEFINE("_HWDVIDS_M_LOG_RUN","El mantenimiento [Registros de acceso a archivos] ya ha sido realizado en las últimas 24 horas. Probablemente no necesites volver a ejecutarlo.");
DEFINE("_HWDVIDS_M_FIX_RUN","No necesario");
DEFINE("_HWDVIDS_M_COUNT_RUN","No necesario");
DEFINE("_HWDVIDS_CTC","Limpiar la caché de plantillas");
DEFINE("_HWDVIDS_CPC","Limpiar la caché de las listas de reproducción");
DEFINE("_HWDVIDS_RGP","Regenerar las listas de reproducción");
DEFINE("_HWDVIDS_CVST","Estadísticas del conversor");
DEFINE("_HWDVIDS_STCV","Iniciar el conversor");
DEFINE("_HWDVIDS_CHANGEUSER","Cambiar el usuario");
DEFINE("_HWDVIDS_FLOC","Localización del fichero");
DEFINE("_HWDVIDS_FURL","URL del fichero");
DEFINE("_HWDVIDS_FNAME","Nombre del fichero");
DEFINE("_HWDVIDS_NQFILE","Fichero de calidad normal");
DEFINE("_HWDVIDS_HQFILE","Fichero de alta calidad");
DEFINE("_HWDVIDS_VREMURL","URL del vídeo remoto");
DEFINE("_HWDVIDS_RTMPURL","URL del flujo RTMP");
DEFINE("_HWDVIDS_IMGREMURL","URL de la miniatura");
DEFINE("_HWDVIDS_REP_DELETEVID","Borrar el vídeo");
DEFINE("_HWDVIDS_REP_INGOREV","Hacer caso omiso de la denuncia (mantener el vídeo)");
DEFINE("_HWDVIDS_REP_INGOREG","Hacer caso omiso de la denuncia (mantener el grupo)");
DEFINE("_HWDVIDS_REP_USER","Denunciado por");
DEFINE("_HWDVIDS_REP_STATUS","Estado de la denuncia");
DEFINE("_HWDVIDS_REP_DATE","Fecha de la denuncia");
DEFINE("_HWDVIDS_TT_01B","Si los vídeos tienen como estado &#34;convirtiéndose&#34; durante más de una hora entonces probablemente algo no está bien. Los vídeos no restablecerán su estado y continuarán con el estado &#34;convirtiéndose&#34; para siempre. Si quieres reiniciar los vídeos y reintentar la conversión por favor pulsa en este botón.");
DEFINE("_HWDVIDS_TT_01H","Reiniciar conversiones fallidas");
DEFINE("_HWDVIDS_CONVERSIONSTARTED","El proceso de conversión ha iniciado<br/> por favor espere...");
DEFINE("_HWDVIDS_CONVERSIONSTART","&laquo; Pulsa aquí para comenzar las conversiones de vídeo &raquo;");
DEFINE("_HWDVIDS_INCLUDECHILD","¿Incluir los grupos hijo?");
DEFINE("_HWDVIDS_YES","Sí");
DEFINE("_HWDVIDS_NO","No");
DEFINE("_HWDVIDS_CATEGORYDET","Detalles de la categoría");
DEFINE("_HWDVIDS_OTHERDET","Otros detalles");
DEFINE("_HWDVIDS_GROUPDET","Detalles del grupo");
DEFINE("_HWDVIDS_DOCS","Documentación");
DEFINE("_HWDVIDS_UNKNOWN","Desconocido");
DEFINE("_HWDVIDS_TITLE","Título");
DEFINE("_HWDVIDS_LENGTH","Duración");
DEFINE("_HWDVIDS_RATING","Puntuación");
DEFINE("_HWDVIDS_DATEUPLD","Fecha de subida");
DEFINE("_HWDVIDS_APPROVED","Aprobado");
DEFINE("_HWDVIDS_FEATURED","Destacado");
DEFINE("_HWDVIDS_PUB","Publicado");
DEFINE("_HWDVIDS_DATECREATED","Fecha de creación");
DEFINE("_HWDVIDS_GRPMEMS","Miembros del grupo");
DEFINE("_HWDVIDS_GRPVIDS","Grupo de vídeos");
DEFINE("_HWDVIDS_VAPPROVEPUB","Aprobar & y publicar vídeo");
DEFINE("_HWDVIDS_CPARENT","Categoría padre");
DEFINE("_HWDVIDS_CVACCESS","Acceso de vista de categoría");
DEFINE("_HWDVIDS_CUACCESS","Acceso de subida de categoría");
DEFINE("_HWDVIDS_CVVISIBLE","¿Hacer que las categorías bloqueadas sean invisibles?");
DEFINE("_HWDVIDS_ADMIN","Administrador");
DEFINE("_HWDVIDS_REORDER","Reordenar");
DEFINE("_HWDVIDS_VIEWS","Vistas");
DEFINE("_HWDVIDS_ACCESS","Acceso");
DEFINE("_HWDVIDS_ORDER","Ordenación");
DEFINE("_HWDVIDS_MARKVASREAD","Hacer caso omiso de la denuncia (mantener el vídeo)");
DEFINE("_HWDVIDS_MARKGASREAD","Hacer caso omiso de la denuncia (mantener el grupo)");
DEFINE("_HWDVIDS_WMIP_01","El administrador de la página necesita instalar ");
DEFINE("_HWDVIDS_WMIP_02"," extensión.");
DEFINE("_HWDVIDS_CATEGORY","Categoría");
DEFINE("_HWDVIDS_TAGS","Etiquetas");
DEFINE("_HWDVIDS_DESC","Descripción");
DEFINE("_HWDVIDS_THUMBPOS","Posición de la miniatura");
DEFINE("_HWDVIDS_UPLOADER","Gestor de subidas");
DEFINE("_HWDVIDS_ACOMMENTS","Permitir comentarios");
DEFINE("_HWDVIDS_AEMBEDDING","Permitir incrustar");
DEFINE("_HWDVIDS_ARATINGS","Permitir votar");
DEFINE("_HWDVIDS_FAVOURED","Favorito");
DEFINE("_HWDVIDS_LINKS_BACK","&laquo; Atrás");
DEFINE("_HWDVIDS_TEXT_NONE","Ninguno");
DEFINE("_HWDVIDS_TITLE_UPLDFAIL","Error al subir");
DEFINE("_HWDVIDS_ALERT_NOTITLE","Por favor introduzca un título para el vídeo");
DEFINE("_HWDVIDS_ALERT_NODESC","Por favor introduzca una descripción para el vídeo");
DEFINE("_HWDVIDS_ALERT_NOCAT","Por favor introduzca una categoría para el vídeo");
DEFINE("_HWDVIDS_ALERT_NOTAG","Por favor introduzca algunas etiquetas para el vídeo");
DEFINE("_HWDVIDS_ALERT_NOURL","Por favor introduce una URL");
DEFINE("_HWDVIDS_PHPUPLD_ERR00","El fichero no se pudo subir. Los datos en el formulario probablemente sobrepasan el límite indicado por post_max_size directive en php.ini. ");
DEFINE("_HWDVIDS_PHPUPLD_ERR01","El fichero es más grande de lo que la instalación de PHP permite. El fichero subido sobrepasa la directiva upload_max_filesize en php.ini.");
DEFINE("_HWDVIDS_PHPUPLD_ERR02","El fichero sobrepasa la directiva MAX_FILE_SIZE especificada en el formulario HTML.");
DEFINE("_HWDVIDS_PHPUPLD_ERR03","Sólo se ha podido subir parcialmente el fichero. ");
DEFINE("_HWDVIDS_PHPUPLD_ERR04","No se ha subido ningún fichero. ");
DEFINE("_HWDVIDS_PHPUPLD_ERR05","Error desconocido");
DEFINE("_HWDVIDS_PHPUPLD_ERR06","No hay directorio temporal. Introducido en PHP 4.3.10 y PHP 5.0.3.");
DEFINE("_HWDVIDS_PHPUPLD_ERR07","Fallo al escribir un fichero en disco.");
DEFINE("_HWDVIDS_PHPUPLD_ERR08","Subida de fichero parada por extensión.");
DEFINE("_HWDVIDS_UPLD_FORMERR01","No se encuentra un título para el vídeo. Por favor vuelva atrás y complete el formulario.");
DEFINE("_HWDVIDS_UPLD_FORMERR02","No se encuentra una descripción para el vídeo. Por favor vuelva atrás y complete el formulario.");
DEFINE("_HWDVIDS_UPLD_FORMERR03","No se encuentra una categoría para el vídeo. Por favor vuelva atrás y complete el formulario.");
DEFINE("_HWDVIDS_UPLD_FORMERR04","No se encuentran etiquetas para el vídeo. Por favor vuelva atrás y complete el formulario.");
DEFINE("_HWDVIDS_UPLD_FORMERR05","No se encuentran ajustes de privacidad para el vídeo. Por favor vuelva atrás y complete el formulario.");
DEFINE("_HWDVIDS_UPLD_FORMERR06","No se encuentran comentarios para el vídeo. Por favor vuelva atrás y complete el formulario.");
DEFINE("_HWDVIDS_UPLD_FORMERR07","No se encuentra una opción de incrustado para el vídeo. Por favor vuelva atrás y complete el formulario.");
DEFINE("_HWDVIDS_UPLD_FORMERR08","No se encuentra una opción de voto para el vídeo. Por favor vuelva atrás y complete el formulario.");
DEFINE("_HWDVIDS_ERROR_UPLDERR01","La subida ha fallado. Esto puede ocurrir por una de las siguientes razones:<ul><li>El fichero es muy grande y supera lo indicado en <b>upload_max_filesize</b> en php.ini.</li><li>El fichero desapareció después de ser subido.</li><li>El fichero ya existe en el servidor.</li></ul>");
DEFINE("_HWDVIDS_ERROR_UPLDERR02","La subida no se pudo procesar porque el fichero es muy grande. El tamaño ha sido restringido por el equipo de desarrolladores de la página a");
DEFINE("_HWDVIDS_ERROR_UPLDERR03","La subida no se pudo procesar porque contiene caracteres no permitidos.");
DEFINE("_HWDVIDS_ERROR_UPLDERR04","La subida no se pudo procesar porque no tienes permisos para subir ficheros en ese formato. Debe ser un formato válido.");
DEFINE("_HWDVIDS_ERROR_UPLDERR05","La subida no se pudo procesar porque el fichero ya existe en el servidor. Por favor, inténtelo de nuevo más tarde.");
DEFINE("_HWDVIDS_ERROR_UPLDERR06","La subida no se pudo procesar porque el fichero no puede ser guardado en el servidor.");
DEFINE("_HWDVIDS_ERROR_UPLDERR07","El formulario no estaba completo. Es necesario que completes todas las secciones requeridas.");
DEFINE("_HWDVIDS_ERROR_UPLDERR08","La subida ha fallado. CÓDIGO DE ERROR 001.");
DEFINE("_HWDVIDS_ERROR_UPLDERR09","La subida ha fallado. CÓDIGO DE ERROR 002.");
DEFINE("_HWDVIDS_ERROR_UPLDERR10","La subida ha fallado. CÓDIGO DE ERROR 003.");
DEFINE("_HWDVIDS_ERROR_UPLDERR11","Tu vídeo no se pudo añadir. Proviene de una página no soportada.");
DEFINE("_HWDVIDS_INFO_SUPPTPW","Los vídeos de las siguientes páginas se pueden añadir.");
DEFINE("_HWDVIDS_BACKLINK","Atrás");
DEFINE("_HWDVIDS_ALERT_DUPLICATE","Este vídeo no se puede añadir porque ya ha sido añadido a la galería.");
DEFINE("_HWDVIDS_RECENT","Reciente");
DEFINE("_HWDVIDS_VIDEOS","Vídeos");
DEFINE("_HWDVIDS_SUBCATS","Subcategorías");
DEFINE("_HWDVIDS_TITLE_MOREBYUSR","Más vídeos de ");
DEFINE("_HWDVIDS_RELATED","Relacionado");
DEFINE("_HWDVIDS_MORECATVIDS","Más vídeos de esta categoría");
DEFINE("_HWDVIDS_ALERT_ERRREM","There has been some kind of error whilst processing the remote video information. Please try again later.");
DEFINE("_HWDVIDS_ALERT_SUCREM","¡Correcto! Tu información de vídeo remoto se ha añadido..");
DEFINE("_HWDVIDS_CCOB","Orden de categoría personalizado");
DEFINE("_HWDVIDS_GLOBAL","Global");
DEFINE("_HWDVIDS_SEARCHBAR","Buscar...");
DEFINE("_HWDVIDS_JS_AS1","ha subido");
DEFINE("_HWDVIDS_JS_AS2","un nuevo");
DEFINE("_HWDVIDS_JS_AS3","vídeo/s");
DEFINE("_HWDVIDS_JS_AS4","vídeo/s");
DEFINE("_HWDVIDS_JS_AS5","nuevo");
DEFINE("_HWDVIDS_NOTITLE","No has introducido un título");
DEFINE("_HWDVIDS_MVTD","Más vistos hoy");
DEFINE("_HWDVIDS_MVTW","Más vistos esta semana");
DEFINE("_HWDVIDS_MVTM","Más vistos este mes");
DEFINE("_HWDVIDS_MVAT","Más vistos");
DEFINE("_HWDVIDS_MFTD","Más marcados como favoritos de hoy");
DEFINE("_HWDVIDS_MFTW","Más marcados como favoritos de esta semana");
DEFINE("_HWDVIDS_MFTM","Más marcados como favoritos este mes");
DEFINE("_HWDVIDS_MFAT","Más marcados como favoritos");
DEFINE("_HWDVIDS_MPTD","Más populares hoy");
DEFINE("_HWDVIDS_MPTW","Más populares esta semana");
DEFINE("_HWDVIDS_MPTM","Más populares este mes");
DEFINE("_HWDVIDS_MPAT","Más populares");
DEFINE("_HWDVIDS_SELECT_ME","Sólo yo");
DEFINE("_HWDVIDS_SELECT_PASSWORD","Protegido con contraseña");
DEFINE("_HWDVIDS_SELECT_JACG","Grupo de acceso");
DEFINE("_HWDVIDS_SELECT_JACL","Nivel de acceso");
DEFINE("_HWDVIDS_PASSWORD","Contraseña");
DEFINE("_HWDVIDS_INFO_GUEST","Invitado");

