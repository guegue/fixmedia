<div id="container" class="columns static clearfix">
	<div id="content">
		<h1 class="title">Preguntas más frecuentes (FAQ)</h1>
		<h2>Cómo me registro</h2>
		<p>Es sencillo, no más tienes que ir a la página de registro<http://remedia.la/usuario/registro> y completar el proceso, con un solo clic, enlazando tu perfil de Facebook o de Twiter o rellenando un formulario con tu nombre y dirección de correo y una contraseña de tu elección. Automáticamente se creará tu perfil personal en donde se irá recogiendo tu actividad en RE:media.</p>

		<h2>Qué es un re:mediante</h2>
		<p>Si utilizas RE:media, eres un re:mediante, un miembro de la comunidad.</p>

		<h2>Cómo utilizo RE:media</h2>
		<p>Una vez te hayas registrado en la plataforma, lo más sencillo es que instales el botón RE:media en tu navegador. Solamente tienes que arrastrarlo desde la página de RE:media hasta la ventana de Firefox, Chrome, Explorer o cualquier otro programa que uses para navegar por Internet. Cuando leas una noticia que necesite un re:medio, haz clic en el botón y sigue los pasos que se te irán indicando. <a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('como-funciona')))); ?>"><? _e('+ info'); ?></a></p>

		<h2>Qué es un reporte</h2>
		<p>Reportar una noticia significa llevarla a la plataforma RE:media para corregirla, ampliarla o solicitar que lo hagan otras personas. Si reportas una noticia antes que nadie, te anotarás un punto de descubrimiento. Si alguien ya reportó la noticia antes que tú, puedes sumar tu reporte. Tantos reportes tiene una noticia, tantas personas consideran que necesita un re:medio.</p>

		<h2>Qué es un re:medio</h2>
		<p>Un re:medio es una corrección o una ampliación de una noticia. Después de descubrir o reportar una noticia, puedes re:mediarla, señalando lo que consideras que es un error, añadiendo fuentes que apoyen tu opinión y proponiendo correcciones. También podrás aportar enlaces con datos, contexto, fuentes o información que consideres que debería tener la noticia pero no tiene.</p>

		<h2>Qué noticias pueden re:mediarse</h2>
		<p>Cualquier noticia publicada por un medio digital de prensa escrita de Latinoamérica.</p>
		<p>Decimos “cualquier noticia”, pero preferimos centrarnos en informaciones que forman opinión pública política, es decir, que son útiles a la hora de tomar una decisión sobre a quién votar local, nacional o regionalmente.</p>
		<p>Si bien la información periodística cubre los más variados aspectos de la vida, entendemos que su función social es vigilar el correcto ejercicio de los poderes (políticos, económicos, religiosos, del Estado), denunciar sus abusos y contribuir a la construcción de una ciudadanía crítica.</p>
		<p>La cobertura de deportes, farándula o cultura es legítima y válida, pero incide muy indirectamente sobre las condiciones de vida de la ciudadanía.</p>
		<p>Por ello, RE:media prefiere trabajar únicamente sobre noticias relativas a la política, la economía y sobre hechos o medidas que afecten a los derechos humanos de las personas y los derechos sexuales y reproductivos de las mujeres. Según estos criterios, la crónica de un partido de fútbol no sería remediable pero sí una nota sobre los recortes del Gobierno en Deportes.</p>
		<p>RE:media busca analizar textos y fotografías publicadas en Internet por medios de prensa escrita. Nuestro fin es constructivo; queremos colaborar para la mejora de las labores periodísticas, elaborando sugerencias de mejora, re:medios, a una noticia, que posteriormente se enviarán a las personas responsables de la redacción y edición de la nota. El medio de comunicación, obviamente, es libre de aplicar o no los re:medios sugeridos.</p>
		<p>Nada se puede modificar de una noticia ya emitida por una televisión o una radio o ya publicada en las páginas de un periódico o un semanario. Sin embargo, los contenidos digitales en la Red permanecen en el tiempo y pueden corregirse, aunque depende del tipo de archivo que haya que modificar. Corregir un vídeo o un audio requiere de un tiempo del que quizás no dispongan las redacciones; remediar un texto o sustituir una imagen es algo sencillo y prácticamente no supone coste alguno.</p>

		<h2>Qué otras cosas puedo hacer en RE:media</h2>
		<p>Puedes compartir tus reportes y re:medios en las redes sociales. También puedes comentar los reportes y re:medios de otros miembros de la comunidad.</p>

<p class="nav">Ir a...</p>
				<ul>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('que-es-remedia')))); ?>"><? _e('Qué es RE:media'); ?></a></li>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('como-funciona')))); ?>"><? _e('Cómo funciona'); ?></a></li>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'equipo'))); ?>">Equipo</a></li>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('contacto')))); ?>"><? _e('Contacto'); ?></a></li>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('aviso-legal')))); ?>"><? _e('Información legal'); ?></a></li>
				</ul>

		
	</div>
	<?php $this->load->view('includes/sidebar-static'); ?>
</div>
