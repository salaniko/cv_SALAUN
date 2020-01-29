<?php

  include("std/std.php");
  include("cv_sprogs.php");

  if(isset($_POST['genererPDF'])) {
    generer_pdf();
  }

  debutPage("CV de Nicolas Salaun", "strict", "public/css/styles.css https://fonts.googleapis.com/css?family=Barlow|Open+Sans");

  	finblockquote();

    div("", "bloc_cv");  # Début div bloc_cv

    	table(0, 0); # Début table

    		tr(); # Debut tr

    		td("L", "", "","id='partie_gauche' rowspan='2'"); # Début td partie_gauche

    			echo img("public/images/portrait.png", "", "", "portrait");

    			div("infos", "infos_personnelles"); # Début div infos_personnelles

    				h1("Personnelles");
    				hr();

    				h2("Nom");
    				p();
    				echo "Nicolas Salaün";
    				finp();

    				h2("Adresses");
    				p();
    				echo "18 Rue d'Anjou, 49100 Angers";
            finp();
            p();
    				echo "131 Launay Bohuon, 35580 Guichen";
    				finp();

    				h2("Mail");
    				p();
    				echo "nicolas.salaun@etud.univ-angers.fr";
    				finp();

    				h2("Téléphone");
    				p();
    				echo "(+33) 7.85.50.78.13";
    				finp();

    				h2("Date de naissance");
    				p();
    				echo "12/12/1998";
    				br();
    				echo "21 ans";
    				finp();

    				h2("Divers");
    				p();
    				echo "Permis B";
    				br();
    				echo "Véhicule personnel";
    				finp();

    			findiv(); # Fin div infos_personnelles

    			div("infos", "infos_langues"); # Début div infos_langues

    				h1("Langues");
    				hr();

    				h2("Français");
    				p();
    				echo "Langue maternelle";
    				finp();

    				h2("Anglais");
    				p();
    				echo "Parler, lire et écrire";
    				finp();

    				h2("Espagnol");
    				p();
    				echo "Notions";
    				finp();

    			findiv(); # Fin div infos_langues

    			div("infos", "infos_interets"); # Début div infos_interets

    				h1("Intérêts");
    				hr();

    				p();
    				echo "Sport";
            finp();
    				p();
    				echo "Cuisine";
    				finp();
            p();
    				echo "Cinéma";
    				finp();

    			findiv(); # Fin div infos_interets

    			div("infos", "infos_reseaux"); # Début div infos_reseaux

    				h1("Réseaux");
    				hr();

            p();
    				echo ahref("https://www.linkedin.com/in/nicolas-salaün-246226155/", "LinkedIn", "", "", "onclick=\"target='_blank';\"");
            finp();

    			findiv(); # Fin div infos_reseaux

    		fintd(); # Fin td partie_gauche

       	td("L", "", 2, "id='partie_droite'"); # Début td partie_droite

       		h1("Nicolas Salaün");

       		div("parcours", "parcours_resume"); # Début div parcours_resume

       			hr();
       			p();
       			echo "Passionné depuis toujours par l'informatique et les nouvelles technologies, je suis curieux et j'ai l'envie d'apprendre sur ce domaine de plus en plus important dans notre époque. C'est pourquoi je me suis lancé dans des études d'informatique depuis 2016 en DUT Informatique premièrement puis désormais en licence professionnelle en alternance.";
       			finp();
       			hr();

       		findiv(); # Fin div parcours_resume

       		div("parcours", "parcours_experiences"); # Début div parcours_experiences

       			h2("Projets et expériences professionnelles");

       			h3("Alternance développeur logiciel 2019 - 2020");
       			p();
       			echo "Développement de modules d'extension pour l'ERP Microsoft Dynamics 365 Business Central.";
       			br();
       			span("lieu");
       			echo "SBSI Consulting, 35000 Rennes";
       			finspan();
       			finp();

       			h3("Stage développeur web printemps 2018");
       			p();
       			echo "Étude de la portabilité d’une application en interne sous un environnement PHP puis Python.";
       			br();
       			span("lieu");
       			echo "Groupe d'Aucy, 56450 Theix-Noyalo";
       			finspan();
       			finp();

       			h3("Projets informatiques 2016 - 2018");
       			ul();
	       			li("Application web pour répertorier et géolocaliser les apiculteurs français en utilisant HTML, CSS, Javascript, PHP et AJAX.");
	       			li("Amélioration d’une application permettant la création de &quot;minds maps&quot; utilisant HTML, CSS, Javascript et JQuery.");
	       			li("Application web de recherche des salles de loisirs et d’activités sportives des Pays de la Loire en utilisant Python, HTML, CSS, Javascript, JQuery et MySQL.");
       			finul();
       			p();
       			span("lieu");
       			echo "IUT de Nantes, 44000 Nantes";
       			finspan();
       			finp();

            h3("Autres emplois");
            ul();
              li("Employé saisonnier dans un hypermarché en 2017.");
              li("Employé communal au sein de l'équipe technique des espaces verts en 2018.");
              li("Technicien dans un centre de tri de La Poste en 2019.");
              li("Auxiliaire au sein de la Direction Régionale des Finances Publiques de Rennes au service courrier / logistique en 2019.");
            finul();

            hr();

       		findiv(); # Fin div parcours_experiences

          div("", "bloc_formations_competences"); # Début div bloc_formations_compétences

            table(0, 0);

              tr();

                th();
                h2("Formations");
                finth();

                th();
                 h2("Compétences");
                finth();

              fintr();

              tr();

                td("L", "", "", "id='formations'"); # Début td formations

                  h3("Licence professionnelle parcours Logiciels Libres");
                  p();
                  echo "Septembre 2019 - 2020";
                  finp();
                  p();
                  span("lieu");
                  echo "UFR Sciences Université d'Angers, 49100 Angers";
                  finspan();
                  finp();

                  h3("DUT Informatique");
                  p();
                  echo "Obtenu en Juin 2018";
                  finp();
                  p();
                  span("lieu");
                  echo "Université de Nantes IUT, 44000 Nantes";
                  finspan();
                  finp();

                  h3("Baccalauréat Scientifique");
                  p();
                  echo "Obtenu Mention Bien en Juin 2016";
                  finp();
                  p();
                  span("lieu");
                  echo "Lycée Anita Conti, 35170 Bruz";
                  finspan();
                  finp();

                fintd(); # Fin td formations

                td("L", "", "", "id='competences'"); # Début td competences

                  h3("Langages");
                  p();
                  echo "C, Java, HTML, CSS, Javascript, JQuery, PHP, MySQL, Python, Microsoft AL";
                  finp();

                  h3("Conception");
                  p();
                  echo "UML, Merise";
                  finp();

                  h3("Systèmes d'exploitation");
                  p();
                  echo "Unix/Linux, Windows, MacOS";
                  finp();

                  h3("Logiciels");
                  p();
                  echo "Suite Office 365";
                  finp();

                  h3("Connaissances générales");
                  p();
                  echo "Gestion de projet informatique ; Notions de droit, d'économie, de comptabilité et d'organisation de l'entreprise";
                  finp();

                fintd(); # Fin td competences

              fintr();

            fintable();

          findiv(); # Fin div bloc_formations_compétences

    		fintd(); # Fin td partie_droite

    		fintr(); # Fin tr

    	fintable(); # Fin table

    findiv(); # Fin fiv bloc_cv

    div("", "boutons"); # Début div boutons

      form("", "post");

        bouton("pdf", "name='genererPDF'", "submit", "Générer le PDF");

        bouton("sources", "onclick=\"window.location.href = 'http://forge.info.univ-angers.fr/~nsalau/cv_SALAUN.zip';\"", "button", "Télécharger le code source");
        
      finform();

    findiv(); # Fin div boutons

  finPageMinimal();

 ?>
