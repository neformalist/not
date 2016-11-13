  // Closes the sidebar menu
    $("#menu-close").click(function(e) {
       
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        
        $("#sidebar-wrapper").toggleClass("active");
    });
    
    $(document).click(function(e){
        
        if($(e.target).closest("#menu-toggle").length) return
        if(!$(e.target).closest("#sidebar-wrapper").length && $("#sidebar-wrapper").hasClass("active"))
        $("#sidebar-wrapper").toggleClass("active");
        
    });
    
        $( ".sidebar-nav li a" ).not( ".sidebar-brand a" ).hover(
            function() {
                $( this ).append( $( "<border></border>" ) );
            }, function() {
                $( this ).find( "border:last" ).remove();
                }
        );
    
    
     var element = 'li a, button, .to-ripple',
      	   current, 
      	   ripple, 
      	   d, 
      	   x, 
      	   y;
      $(element).click(function (e) {
	current = $(this);
	// Cria o elemento .ripple caso ele não exista
	if (current.find(".ripple").length === 0) {
	  // Prepara o pai para receber o elemento .ripple
	  current.addClass('prepare-ripple');
	  // Insere o elemento .ripple no conteúdo
	  current.prepend("<span class='ripple'></span>");
	}
	// Define o .ripple criado em uma variável
	ripple = current.find(".ripple");
	// Em caso de cliques duplos rápidos, para a animação anterior
	ripple.removeClass("on-animate");
	// Define o tamanho do .ripple
	if (!ripple.height() && !ripple.width()) {
	  // Usa a largura ou a altura do pai 
	  // O que for maior para fazer um círculo que pode cobrir todo o elemento.
	  d = Math.max(current.outerWidth(), current.outerHeight());
	  ripple.css({
	    height: d,
	    width: d
	  });
	}
	// Coordenadas do clique
	// Lógica = Coordenadas em relação a página 
	// - Do pai, posição relativa para a página
	x = e.pageX - current.offset().left - ripple.width() / 2;
	y = e.pageY - current.offset().top - ripple.height() / 2;
	// Define a posição e adiciona a classe .on-animate
	ripple.css({
	  top: y + 'px',
	  left: x + 'px'
	}).addClass("on-animate");
      });
    
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
