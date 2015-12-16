$(document).ready(function(){
	$('.tableauUser > tr').click(function(event){
		// On récupère l'id en cliquant sur la ligne du tableau
		var idUser = $(event.target).parent().attr('id');
		// On redirige vers le page view en lui plançant en parametre
		// l'id de l'user que l'on vient de récupérer.
		document.location.href="index.php?uc=user&action=view&id="+idUser;
	});

	$('#Experience').hide();
	$('#Competences').hide();
	$('#Formation').hide();
	$('#Loisirs').hide();

	$('#buttonrendu').click(function(){
		$('#Rendu').show();
		$('#Experience').hide();
		$('#Competences').hide();
		$('#Formation').hide();
		$('#Loisirs').hide();
	});

	$('#buttonexperiences').click(function(){
		$('#Rendu').hide();
		$('#Experience').show();
		$('#Competences').hide();
		$('#Formation').hide();
		$('#Loisirs').hide();
	});

	$('#buttoncompetences').click(function(){
		$('#Rendu').hide();
		$('#Experience').hide();
		$('#Competences').show();
		$('#Formation').hide();
		$('#Loisirs').hide();
	});

	$('#buttonformation').click(function(){
		$('#Rendu').hide();
		$('#Experience').hide();
		$('#Competences').hide();
		$('#Formation').show();
		$('#Loisirs').hide();
	});

	$('#buttonloisirs').click(function(){
		$('#Rendu').hide();
		$('#Experience').hide();
		$('#Competences').hide();
		$('#Formation').hide();
		$('#Loisirs').show();
	});

});
