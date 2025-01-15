<?php
/* Template Name: Page Agenda */
get_header(); 
?>
<div class="blue_header-background"></div>
<div class="agenda">
    <h1>Agenda</h1>
    
    <?php if (have_rows('agenda_spectacles')): 
        $spectacles = []; // Stocke les spectacles pour tri
        while (have_rows('agenda_spectacles')): the_row();
            $spectacles[] = [
                'annee' => get_sub_field('diary_year'),
                'date_complete' => get_sub_field('diary_date'),
                'titre' => get_sub_field('diary_title-show'),
                'lieu' => get_sub_field('diary_show-location'),
            ];
        endwhile;

        // Tri par date décroissante
        usort($spectacles, function ($a, $b) {
            return strtotime($b['date_complete']) - strtotime($a['date_complete']);
        });

        $current_year = '';
        foreach ($spectacles as $spectacle):
            $annee = $spectacle['annee'];
            $date_complete = $spectacle['date_complete'];
            $titre = $spectacle['titre'];
            $lieu = $spectacle['lieu'];

            // Vérifie l'année et affiche le header correspondant
            if ($annee !== $current_year) {
                if ($current_year !== '') echo "</ul></div>"; // Ferme la précédente liste
                $current_year = $annee;
                echo "<div class='agenda-annee'><h2>$annee</h2><ul>";
            }

            // Affiche le spectacle
            echo "<li>
                    <span class='agenda-date'>" . date_i18n('j F', strtotime($date_complete)) . "</span> - 
                    <span class='agenda-titre'>$titre</span> - 
                    <span class='agenda-lieu'>$lieu</span>
                  </li>";
        endforeach;
        echo "</ul></div>"; // Ferme la dernière liste
    endif;
    ?>
</div>

<?php get_footer(); ?>
