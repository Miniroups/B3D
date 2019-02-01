<?php
  session_start();
  $translate = array(
// FRENCH /////////////////////////////////////////////////////////////////////
    'french' => array(
      // Header
      'menu_home' => 'Accueil',
      'menu_society' => 'Société',
      'menu_products' => 'Produits',
      'menu_products_chestnut' => 'Châtaignier',
      'menu_products_pine' => 'Pin',
      'menu_products_acacia' => 'Acacia',
      'menu_products_wood' => 'Bois de chauffe',
      'menu_contact' => 'Contact',
      'menu_langue' => 'Langue',
      'menu_langue_french' => 'Français',
      'menu_langue_deutsch' => 'Deutsh',
      'menu_langue_english' => 'English',
      'menu_langue_spanish' => 'Español',
      // Footer
      'footer_plan_du_site' => 'Plan du site',
      'footer_copyright' => 'Copyright (c) 2018 Copyright Holder All Rights Reserved.',
      'footer_mentions' => 'Mentions légales',
      // Modal
      'modal_header' => 'Comparaison des émissions de CO2 pour la fabrication de pieux en béton, en acier et en bois.',
      'modal_body' => '<table>
        <tr>
          <th>Pieux béton</th>
          <th>Pieux acier</th>
          <th>Pieux bois</th>
        </tr>
        <tr>
          <td>
          Fabrication béton armé : 367 kg CO2/tonne (Ademe)Extraction de grannulats : 88 kg CO2/tonne (Ademe)
          </td>
          <td>
          Fabrication acier : 3190 kg de CO2/tonne (Ademe).
          </td>
          <td>Fabrication bois d’œuvre : 36,7 kg de CO2/tonne (Ademe)</td>
        </tr>
        <tr>
          <td>P béton : 2200 kg/m3</td>
          <td>P acier : 7 500 kg/m3</td>
          <td>P bois : 700 kg/m3</td>
        </tr>
        <tr>
          <td>Masse CO2 émise : 319 kg</td>
          <td>Masse CO2 émise : 8455 kg</td>
          <td>Masse CO2 émise : 9kg</td>
        </tr>
        <tr>
          <td>Transport grannulats : 10 kg de CO2</td>
          <td>-</td>
          <td>Transport de 10 grumes sur 60 km : Véhicule (PTAC) : de 3,51 à 5 tonnes Emission de CO2 à pleine charge : 175 g/km (Ademe) Émission de CO2 : 10,5 kg soit 1 kg de CO2 par grume.</td>
        </tr>
        <tr>
          <td>Masse de CO2 émise : 329 kg</td>
          <td>Masse CO2 émise : 8 455 kg</td>
          <td>Masse CO2 émise : 10 kg</td>
        </tr>
      </table>',
      'modal_footer' => 'Les résultats obtenus montrent que la fabrication d’un pieu en bois émet environ 30 fois moins de CO2 que la fabrication d’un pieu en béton et 850 fois moins que celle d’un pieu acier.',
      // Section-Contact
      'section_c_title' => 'Restons en contact',
      'section_c_tel_s' => 'Téléphone :',
      'section_c_tel' => ' 06 95 51 77 05',
      'section_c_mail_s' => 'Email :',
      'section_c_mail' => ' julien.procedes@orange.fr',
      'section_c_adresse_s' => 'Adresse :',
      'section_c_adresse' => ' " l\'Intendant " 47700 Poussignac',
      'section_c_horaire_s' => 'Horaire d\'ouverture :',
      'section_c_horaire' => ' Du lundi au vendredi 8h-12h 14h-18h et samedi 9h-12h',
      // Société
      'society_title' => 'B3D | Société',
      'society_hist_title' => 'Notre histoire',
      'society_hist_p' => 'Notre société est située à Poussignac dans le Lot-et-Garonne aux portes du massif landais et au plus prés de la ressource forestière. Dans les années 80, mon père y a construit une scierie de pin maritime fermée en 2015. En 2018, après avoir travaillé dans différents organismes et sociétés de la filière bois, j’ai choisi de revenir sur le site familial pour installer une unité de fabrication de piquets bois.<br><br> Fort de 20 ans d’expérience dans la ﬁlière bois, j’ai souhaité faire un retour aux sources en m’installant dans l’ancienne scierie familiale située au plus près de la ressource forestière.<br>Je me suis spécialisé dans la fabrication de piquets et rondins d’acacia, pins ou châtaignier.<br><br> Mon outil de production souple et flexible permet de produire des piquets ou rondins fendus ou ronds de différentes dimensions.<br><br> Destinés aux vignerons, paysagistes, arboriculteurs, ou tout simplement aux particuliers désireux de créer une clôture ou un aménagement de jardin, les piquets ou rondins B3D sont une valeur sûre. ',
      'society_sav_title' => 'Notre savoir-faire',
      'society_sav_p' => 'La présence d’une diversité d’essences de bois locaux a orienté mon choix sur un outil de transformation souple et flexible permettant de produire des piquets acacia, pin et châtaignier de différentes dimensions. Suivant l’essence et le diamètre des bois transformés deux opérations sont réalisées.<br><br> Une opération de planage permettant d’apporter un état de surface raboté et lisse aux bois ronds ou une opération de fente permettant de suivre le fil du bois et conserver la résistance mécanique du bois et éviter les déformations de séchage. En mesure de précaution sanitaire une opération d’écorçage est réalisée pour chaque essence de bois.<br><br> Cette opération permet d’éviter de transporter d’éventuels parasites comme des insectes xylophages sur le site de la clientèle. La satisfaction client est notre objectif premier et un contrôle de la qualité du produit est réalisé à chaque étape de transformation.',
      'society_products_title' => 'Nos produits',
      'society_products_p' => 'Nos piquets et rondins sont produits à partir de grumes exploitées dans un rayon de 70 km. Le pin provient de coupes d’éclaircies plantées après la tempête de 1999.<br><br> Ces bois juvéniles utilisés généralement pour la mise en place de filets anti-grêle ou le palissage comportent une très faible proportion de bois de cœur leurs donnant une très bonne aptitude au traitement autoclave.<br><br> Nos grumes d’acacia comportent une très faible quantité d’aubier et des cernes d’accroissement serrées conférant au bois une excellente durabilité naturelle et une très bonne résistance mécanique.<br><br> L’ensemble de nos bois proviennent de coupes gérées durablement et bénéficie généralement de la certification PEFC.',
      // PRODUCTS Acacia
      'acacia_title' => 'B3D | Acacia',
      'acacia_h1' => 'Acacia',
      'acacia_use' => 'Usages',
      'acacia_use_p' => 'L’ensemble de nos produits acacia sont écorcés pour apporter plus d’esthétique et de propreté aux piquets mais surtout pour éviter de transporter des parasites comme des insectes xylophages sur le site de la clientèle.<br><br> Nos piquets acacia sont fendus ou planés et une pointe carrée d’une surface comprise entre 1 et 1,5 cm² est réalisée gros bout.<br><br> L’opération de fente permet au bois de conserver sa résistance mécanique et limiter les déformations de séchage.',
      'acacia_carousel_1' => 'Grume d\'Acacia',
      'acacia_carousel_2' => 'Fagots de piquets d\'Acacia',
      'acacia_carousel_3' => 'Clôture en piquet d\'Acacia',
      'acacia_table_1_title' => 'Piquets fendus',
      'acacia_table_1_content' => '<table>
        <tr>
          <th colspan="2">Longueurs</th>
          <th>1m 40</th>
          <th>1m 80</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
        </tr>
        <tr>
          <td rowspan="4">Périmètres bout fin</td>
          <td>19/23 cm</td>
          <td colspan="3">160 pièces / palette</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>23/26 cm</td>
          <td colspan="4">150 pièces / palette</td>
          <td>-</td>
        </tr>
        <tr>
          <td>26/29 cm</td>
          <td colspan="5">130 pièces / palette</td>
        </tr>
        <tr>
          <td>29 cm et plus</td>
          <td>-</td>
          <td colspan="4">110 pièces / palette</td>
        </tr>
      </table>',
      'acacia_table_2_title' => 'Piquets ronds',
      'acacia_table_2_content' => '<table>
        <tr>
          <th colspan="2">Longueurs</th>
          <th>1m 80</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
          <th>3m 00</th>
          <th>4m 00</th>
        </tr>
        <tr>
          <td rowspan="4">Diamètres bout fin</td>
          <td>6/8 cm</td>
          <td colspan="3">80 pièces / palette</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>8/10 cm</td>
          <td colspan="4">71 pièces / palette</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>10/12 cm</td>
          <td colspan="6">56 pièces / palette</td>
        </tr>
        <tr>
          <td>12/15 cm</td>
          <td colspan="6">42 pièces / palette</td>
        </tr>
      </table>',
      // PRODUCTS Bois de chauffe
      'bois_chauffe_title' => 'B3D | Bois de chauffe',
      'bois_chauffe_h1' => 'Bois de chauffe',
      'bois_chauffe_carac' => 'Caractéristiques',
      'bois_chauffe_carac_p' => 'Notre bois de chauffage issu de notre production de piquets acacia est vendu sous forme de fagots de 2 ou 2,5 stères ou de bûches fendues de 30 cm.',
      'bois_chauffe_carousel_1' => 'Title 1',
      'bois_chauffe_carousel_2' => 'Title 2',
      'bois_chauffe_carousel_3' => 'Title 3',
      // PRODUCTS Châtaignier
      'chataigner_title' => 'B3D | Châtaignier',
      'chataigner_h1' => 'Châtaignier',
      'chataigner_use' => 'Usages',
      'chataigner_use_p' => 'Moins durable dans le temps que l’acacia, le châtaignier en reste néanmoins une essence
      imputrescible grâce à sa présence d’acide tanique.<br><br>
      L’ensemble de nos produits châtaignier sont écorcés pour apporter plus d’esthétique et de propreté
      aux piquets mais surtout pour éviter de transporter des parasites sur le site de la clientèle.
      Nos piquets acacia sont fendus ou planés et une pointe carrée d’une surface comprise entre 1 et 1,5
      cm² est réalisée gros bout.<br><br>
      L’opération de fente permet au bois de conserver sa résistance mécanique et limiter les
      déformations de séchage.',
      'chataigner_carousel_1' => 'Grume de châtaignier',
      'chataigner_carousel_2' => 'Grume de châtaignier',
      'chataigner_carousel_3' => 'Grume de châtaignier',
      'chataigner_table_1_title' => 'Piquets châtaignier',
      'chataigner_table_1_content' => '<table>
        <tr>
          <th colspan="2">Longueurs</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
        </tr>
        <tr>
          <td rowspan="2">Périmètres fin bout</td>
          <td>24/29 cm</td>
          <td colspan="3">130 pièces / palette</td>
        </tr>
        <tr>
          <td>28 cm et +</td>
          <td colspan="4">110 pièces / palette</td>
        </tr>
      </table>',
      // PRODUCTS Pin
      'pin_title' => 'B3D | Pin',
      'pin_h1' => 'Pin',
      'pin_use' => 'Usages',
      'pin_use_p' => 'Nos piquets et poteaux pins sont planés et une pointe carrée d’une surface comprise entre 1 et 1,5 cm² est réalisée gros bout.<br><br>
      La qualité de nos bois est conforme aux spécifications de la norme NF B 50-100-3 pour une classe d’emploi classe IV après avoir subi un traitement en autoclave suivant le procédé Bethell vide et pression 12 bars dans une station certifiée CTB B+.<br><br>
      La proportion de bois de cœur présente dans nos pins est faible ce qui permet une pénétration et une rétention de produit de préservation optimum pour longévité accrue de nos piquets et poteaux.',
      'pin_carousel_1' => 'Grume de Pin',
      'pin_carousel_2' => 'Piquets en Pin',
      'pin_carousel_3' => 'Piquets en Pin',
      'pin_table_1_title' => 'Piquets viticoles',
      'pin_table_1_content' => '<table >
      	<tbody>
      		<tr>
      			<td colspan="2">Longueurs</td>
      			<td>2m 00</td>
      			<td>2m 30</td>
      			<td>2m 50</td>
      		</tr>
      		<tr>
      			<td rowspan="3"><span class="verticalCells">Diamètres fin bout</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 pièces / palettes</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="3">72 pièces / palettes</td>
      		</tr>
      		<tr>
      			<td>12/14 cm</td>
      			<td colspan="3">56 pièces / palettes</td>
      		</tr>
      	</tbody>
      </table>',
      'pin_table_2_title' => 'Poteaux arboricoles',
      'pin_table_2_content' => '<table>
      	<tbody>
      		<tr>
      			<td colspan="2">Longueurs</td>
      			<td>2m 50</td>
      			<td>2m 80</td>
      			<td>3m 00</td>
      			<td>3m 50</td>
      			<td>4m 00</td>
      			<td>4m 50</td>
      			<td>5m 00</td>
      		</tr>
      		<tr>
      			<td rowspan="4"><span class="verticalCells">Diamètres fin bout</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 pièces / palettes</td>
      			<td colspan="4">-</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="4">72 pièces / palettes</td>
      			<td colspan="3">64 pièces / palettes</td>
      		</tr>
      		<tr>
            <td>12/14 cm</td>
      			<td colspan="4">56 pièces / palettes</td>
      			<td colspan="3">48 pièces / palettes</td>
      		</tr>
      		<tr>
            <td>14/16 cm</td>
      			<td colspan="4">42 pièces / palettes</td>
      			<td colspan="3">36 pièces / palettes</td>
      		</tr>
      	</tbody>
      </table>',
      // Contact
      'contact_title' => 'B3D | Contact',
      'form_field_1_1' => 'Vous êtes...',
      'form_field_1_2' => 'Veuillez choisir',
      'form_field_1_3' => 'un particulier',
      'form_field_1_4' => 'un professionnel',
      'form_field_1_5' => 'autre',
      'form_field_2' => 'Prénom',
      'form_field_2_placeholder' => 'Votre prénom',
      'form_field_3' => 'Nom',
      'form_field_3_placeholder' => 'Votre nom',
      'form_field_4' => 'Adresse',
      'form_field_4_placeholder' => 'Votre adresse',
      'form_field_5' => 'Code Postal',
      'form_field_5_placeholder' => 'Code postal',
      'form_field_6' => 'Ville',
      'form_field_6_placeholder' => 'Ville',
      'form_field_7' => 'Courriel',
      'form_field_7_placeholder' => '@',
      'form_field_8' => 'Téléphone',
      'form_field_8_placeholder' => 'format: 06 01 02 03 04',
      'form_field_9' => 'Message',
      'form_field_9_placeholder' => 'Entrez ici votre message (maximum 3000 caractères)',
      'form_p_1' => 'Ces informations sont requises',
      'form_p_2' => 'J\'accepte la <a href="mentions.php">politique de confidentialité</a> du site',
      'form_submit' => 'Envoyer',
      // Index
      'index_title' => 'B3D | Accueil',
      // Mentions
      'mentions_title' => 'B3D | Mentions Légales',
      'mentions_h1' => 'Mentions légales',
      'mentions_p' => 'Conformément aux articles 6, 19 et 20 de la loi n°2004-575 du 21 Juin 2004 pour la Confiance dans l\'économie numérique, il est porté à la connaissance des utilisateurs et visiteur du site B3D les présentes mentions légales. Sont considérés comme utilisateurs tous les internautes qui naviguent, lisent, visionnent et utilisent le site B3D. L\'accès et l\'utilisation du site sont soumis aux présentes mentions légales ainsi qu\'aux lois et règlements applicables ; et impliquent l\'acceptation intégrale et sans réserve de l\'internaute de toutes les dispositions des présentes mentions.',
      'mentions_legals' => 'Informations légales',
      'mentions_legals_p' => 'Il est précisé dans cette article l\'identité des différents intervenants dans le cadre de la réalisation et le suivi du site.<br> Le site B3D a été réalisé par <a href="https://corrtech.fr/" target="_blank">CorrTech</a> domicilié à la Maison du Pole Bois, 22 Avenue du Dr Albert Schweitzer, 19000 Tulle.<br> Le site est géré et administré par la société B3D - PIQUETS, RONDINS, SARL immatriculée au RCS D\'AGEN sous le n°839 044 237, au capital de 10.000,00€, dont le siège social est situé : "l\'Intendant" 47700 Poussignac, prise en la personne de son gérant en exercice ; et par les prestataires que ladite société sera amenée à choisir pour la gestion et l\'administration du site.',
      'mentions_privacy' => 'Politique de confidentialité',
      'mentions_privacy_p_1' => 'Conformément aux dispositions du Règlement européen 2016/679 dit "RGPD", il est précisé que les données à caractère personnel pouvant être collectées sont les suivantes : ',
      'mentions_privacy_li_1' => '<li>Données d\'identification</li>
      <li>Coordonnées postale, téléphonique et électronique</li>
      <li>Statut (particulier ou professionnel)</li>',
      'mentions_privacy_p_2' => 'Ces données sont collectées <em>uniquement</em> lorsque l\'utilisateur communique volontairement avec la société B3D par le truchement du formulaire de contact en ligne. Ces données sont nécessaires pour le traitement des demandes transmises par cet intermédiaire. Les informations nominatives sont exclusivement collectées pour un usage interne et elles ne feront l\'objet d\'aucune transmission à des tiers.',
      'mentions_privacy_p_3' => 'Conformément à la réglementation, vous disposez d\'un droit d\'accès, de modification, de rectification et de suppression des données qui vous concernent. Pour se faire, l\'utilisateur devra s\'adresser à :',
      'mentions_privacy_li_2' => '      <li>Société B3D</li>
            <li>"l\'Intendant"</li>
            <li>47700 Poussignac</li>
            <li>Tél : 01 23 45 67 89</li>',
      // Plan du site
      'plan_site_title' => 'B3D | Plan du site',
      'plan_site_h1' => 'Plan du site',
      'plan_site_society' => 'Société',
      'plan_site_products' => 'Produits',
      'plan_site_products_acacia' => 'Acacia',
      'plan_site_products_pin' => 'Pin',
      'plan_site_products_chesnut' => 'Châtaigner',
      'plan_site_products_wood' => 'Bois de chauffe',
      'plan_site_contact' => 'Contact',
      'plan_site_mentions' => 'Mentions',
      'plan_site_plan_site' => 'Plan du site',
      ),
// ENGLISH ////////////////////////////////////////////////////////////////////
    'english' => array(
      // Header
      'menu_home' => 'Home',
      'menu_society' => 'Society',
      'menu_products' => 'Products',
      'menu_products_chestnut' => 'Chesnut',
      'menu_products_pine' => 'Pine',
      'menu_products_acacia' => 'Acacia',
      'menu_products_wood' => 'Firewood',
      'menu_contact' => 'Contact',
      'menu_langue' => 'Language',
      'menu_langue_french' => 'Français',
      'menu_langue_deutsch' => 'Deutsh',
      'menu_langue_english' => 'English',
      'menu_langue_spanish' => 'Español',
      // Footer
      'footer_plan_du_site' => 'Sitemap',
      'footer_copyright' => 'Copyright (c) 2018 Copyright Holder All Rights Reserved.',
      'footer_mentions' => 'Legal Notice',
      // Modal
      'modal_header' => 'Comparison of CO2 emissions for the manufacture of concrete, steel and wood piles.',
      'modal_body' => '<table>
        <tr>
          <th>Concrete piles</th>
          <th>Steel piles</th>
          <th>Wood piles</th>
        </tr>
        <tr>
          <td>
          Reinforced concrete production: 367 kg CO2 / tonne (Ademe) Extraction of grannulates: 88 kg CO2 / tonne (Ademe)</td>
          <td>
          Steel production: 3190 kg of CO2 / tonne (Ademe).
          </td>
          <td>Lumber production: 36.7 kg CO2 / tonne (Ademe)</td>
        </tr>
        <tr>
          <td>P Concrete : 2200 kg/m3</td>
          <td>P Steel : 7 500 kg/m3</td>
          <td>P Wood : 700 kg/m3</td>
        </tr>
        <tr>
          <td>Emitted CO2 mass : 319 kg</td>
          <td>Emitted CO2 mass : 8455 kg</td>
          <td>Emitted CO2 mass : 9kg</td>
        </tr>
        <tr>
          <td>Transportation grannulats : 10 kg of CO2</td>
          <td>-</td>
          <td>Transport of 10 logs over 60 km: Vehicle (GVWR): from 3.51 to 5 tonnes Emission of CO2 at full load: 175 g / km (Ademe) CO2 emissions: 10.5 kg or 1 kg of CO2 per log.</td>
        </tr>
        <tr>
          <td>Emitted CO2 mass : 329 kg</td>
          <td>Emitted CO2 mass : 8 455 kg</td>
          <td>Emitted CO2 mass : 10 kg</td>
        </tr>
      </table>',
      'modal_footer' => 'The results obtained show that the manufacture of a wooden pile emits approximately 30 times less CO2 than the manufacture of a concrete pile and 850 times less than that of a steel pile.',
      // Section-Contact
      'section_c_title' => 'Keep in touch',
      'section_c_tel_s' => 'Phone :',
      'section_c_tel' => ' 06 95 51 77 05',
      'section_c_mail_s' => 'Mail :',
      'section_c_mail' => ' julien.procedes@orange.fr',
      'section_c_adresse_s' => 'Address :',
      'section_c_adresse' => ' " l\'Intendant " 47700 Poussignac',
      'section_c_horaire_s' => 'Opening time :',
      'section_c_horaire' => ' Monday to Friday 8h-12h 14h-18h and Saturday 9h-12h',
      // Société
      'society_title' => 'B3D | Society',
      'society_hist_title' => 'Our history',
      'society_hist_p' => 'Our company is located in Poussignac in the Lot-et-Garonne at the gates of the Landes massif and closer to the forest resource. In the 80s, my father built a maritime pine sawmill closed in 2015. In 2018, after working in various organizations and companies in the wood industry, I chose to return to the family site to install a plant. wood stakes manufacturing. <br> <br> With 20 years of experience in the wood industry, I wanted to go back to basics by settling in the old family sawmill located closer to the forest resource . <br> I specialized in the manufacture of pickets and logs of acacia, pine or chestnut. <br> <br> My flexible and flexible production tool makes it possible to produce poles or rounded logs of different dimensions. <br> <br> For growers, landscapers, arboriculturists, or just for individuals wanting to create a fence or garden, stakes or logs B3D are a safe bet.',
      'society_sav_title' => 'Our expertise',
      'society_sav_p' => 'The presence of a variety of local wood species has guided my choice on a flexible and flexible processing tool to produce acacia, pine and chestnut stakes of different sizes. Depending on the species and the diameter of the processed wood, two operations are carried out. <br> <br> A planing operation to bring a planed and smooth surface to the round woods or a slot operation allowing to follow the thread of the wood and maintain the mechanical strength of wood and avoid drying deformations. As a sanitary precaution a debarking operation is carried out for each species of wood. <br> <br> This operation makes it possible to avoid carrying any parasites such as xylophagous insects on the site of the clientele. Customer satisfaction is our primary goal and product quality control is achieved at every stage of processing.',
      'society_products_title' => 'Our products',
      'society_products_p' => 'Our stakes and logs are produced from logs operated within a radius of 70 km. The pine comes from thinning cuttings planted after the 1999 storm. <br> <br> These juvenile woods commonly used for the establishment of anti-hail nets or trellising have a very low proportion of heartwood giving them very good ability to autoclave treatment. <br> <br> Our acacia logs have a very small amount of sapwood and tight growth rings giving the wood excellent natural durability and very good mechanical strength. > <br> All of our wood comes from sustainably managed cuts and generally benefits from PEFC certification.',
      // PRODUCTS Acacia
      'acacia_title' => 'B3D | Acacia',
      'acacia_h1' => 'Acacia',
      'acacia_use' => 'Uses',
      'acacia_use_p' => 'All of our acacia products are debarked to bring more aesthetics and cleanliness to the stakes but especially to avoid transporting parasites like xylophagous insects on the site of the clientele. <br> <br> Our acacia stakes are split or flattened and a square point of an area between 1 and 1.5 cm² is made big end. <br> <br> The slot operation allows the wood to maintain its mechanical strength and limit deformation of drying.',
      'acacia_carousel_1' => 'Acacia Log',
      'acacia_carousel_2' => 'Fagots of pickets of Acacia',
      'acacia_carousel_3' => 'Fence of pickets of Acacia',
      'acacia_table_1_title' => 'Split stakes',
      'acacia_table_1_content' => '<table>
        <tr>
          <th colspan="2">Length</th>
          <th>1m 40</th>
          <th>1m 80</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
        </tr>
        <tr>
          <td rowspan="4">Perimeters end end</td>
          <td>19/23 cm</td>
          <td colspan="3">160 pièces / palette</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>23/26 cm</td>
          <td colspan="4">150 pièces / palette</td>
          <td>-</td>
        </tr>
        <tr>
          <td>26/29 cm</td>
          <td colspan="5">130 pièces / palette</td>
        </tr>
        <tr>
          <td>29 cm et plus</td>
          <td>-</td>
          <td colspan="4">110 pièces / palette</td>
        </tr>
      </table>',
      'acacia_table_2_title' => 'Round stakes',
      'acacia_table_2_content' => '<table>
        <tr>
          <th colspan="2">Length</th>
          <th>1m 80</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
          <th>3m 00</th>
          <th>4m 00</th>
        </tr>
        <tr>
          <td rowspan="4">Fine end diameters</td>
          <td>6/8 cm</td>
          <td colspan="3">80 pièces / palette</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>8/10 cm</td>
          <td colspan="4">71 pièces / palette</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>10/12 cm</td>
          <td colspan="6">56 pièces / palette</td>
        </tr>
        <tr>
          <td>12/15 cm</td>
          <td colspan="6">42 pièces / palette</td>
        </tr>
      </table>',
      // PRODUCTS Bois de chauffe
      'bois_chauffe_title' => 'B3D | Firewood',
      'bois_chauffe_h1' => 'Firewood',
      'bois_chauffe_carac' => 'Characteristics',
      'bois_chauffe_carac_p' => 'Our firewood from our production of acacia stakes is sold in bundles of 2 or 2.5 steres or 30 cm split logs.',
      'bois_chauffe_carousel_1' => 'Title 1',
      'bois_chauffe_carousel_2' => 'Title 2',
      'bois_chauffe_carousel_3' => 'Title 3',
      // PRODUCTS Châtaignier
      'chataigner_title' => 'B3D | Chesnut',
      'chataigner_h1' => 'Chesnut',
      'chataigner_use' => 'Uses',
      'chataigner_use_p' => 'Less durable in time than acacia, chestnut remains nevertheless an essence
       imputrescible thanks to its presence of tanic acid. <br> <br>
       All our chestnut products are debarked to bring more aesthetics and cleanliness
       pickets but especially to avoid carrying parasites on the site of customers.
       Our acacia stakes are slotted or flat and a square tip with an area between 1 and 1.5
       cm² is made big end. <br> <br>
       The slot operation allows the wood to maintain its mechanical strength and limit
       drying deformations.',
      'chataigner_carousel_1' => 'Chesnut log',
      'chataigner_carousel_2' => 'Chesnut log',
      'chataigner_carousel_3' => 'Chesnut log',
      'chataigner_table_1_title' => 'Chesnut stacks',
      'chataigner_table_1_content' => '<table>
        <tr>
          <th colspan="2">Length</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
        </tr>
        <tr>
          <td rowspan="2">Perimeters late end</td>
          <td>24/29 cm</td>
          <td colspan="3">130 pièces / palette</td>
        </tr>
        <tr>
          <td>28 cm et +</td>
          <td colspan="4">110 pièces / palette</td>
        </tr>
      </table>',
      // PRODUCTS Pin
      'pin_title' => 'B3D | Pine',
      'pin_h1' => 'Pine',
      'pin_use' => 'Uses',
      'pin_use_p' => 'Our pins and poles pins are flat and a square tip of a surface between 1 and 1.5 cm² is made big end.
       The quality of our wood conforms to the specifications of standard NF B 50-100-3 for a class of class IV use after having undergone an autoclave treatment using the vacuum Bethell process and pressure of 12 bars in a CTB B + certified station. <br>
       The proportion of heartwood present in our pines is low which allows penetration and retention of optimum preservative for increased longevity of our stakes and poles.',
      'pin_carousel_1' => 'Pine log',
      'pin_carousel_2' => 'Pine stacks',
      'pin_carousel_3' => 'Pine stacks',
      'pin_table_1_title' => 'Wine pickets',
      'pin_table_1_content' => '<table >
      	<tbody>
      		<tr>
      			<td colspan="2">Length</td>
      			<td>2m 00</td>
      			<td>2m 30</td>
      			<td>2m 50</td>
      		</tr>
      		<tr>
      			<td rowspan="3"><span class="verticalCells">Diamètres fin bout</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 pièces / palettes</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="3">72 pièces / palettes</td>
      		</tr>
      		<tr>
      			<td>12/14 cm</td>
      			<td colspan="3">56 pièces / palettes</td>
      		</tr>
      	</tbody>
      </table>',
      'pin_table_2_title' => 'Tree poles',
      'pin_table_2_content' => '<table>
      	<tbody>
      		<tr>
      			<td colspan="2">Length</td>
      			<td>2m 50</td>
      			<td>2m 80</td>
      			<td>3m 00</td>
      			<td>3m 50</td>
      			<td>4m 00</td>
      			<td>4m 50</td>
      			<td>5m 00</td>
      		</tr>
      		<tr>
      			<td rowspan="4"><span class="verticalCells">Diameters end end</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 pièces / palettes</td>
      			<td colspan="4">-</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="4">72 pièces / palettes</td>
      			<td colspan="3">64 pièces / palettes</td>
      		</tr>
      		<tr>
            <td>12/14 cm</td>
      			<td colspan="4">56 pièces / palettes</td>
      			<td colspan="3">48 pièces / palettes</td>
      		</tr>
      		<tr>
            <td>14/16 cm</td>
      			<td colspan="4">42 pièces / palettes</td>
      			<td colspan="3">36 pièces / palettes</td>
      		</tr>
      	</tbody>
      </table>',
      // Contact
      'contact_title' => 'B3D | Contact',
      'form_field_1_1' => 'You are',
      'form_field_1_2' => 'Please choose ...',
      'form_field_1_3' => 'A particular',
      'form_field_1_4' => 'A profesional',
      'form_field_1_5' => 'Other',
      'form_field_2' => 'Firstname',
      'form_field_2_placeholder' => 'Your first name',
      'form_field_3' => 'Name',
      'form_field_3_placeholder' => 'Your name',
      'form_field_4' => 'Address',
      'form_field_4_placeholder' => 'Your address',
      'form_field_5' => 'Postal Code',
      'form_field_5_placeholder' => 'Postal code',
      'form_field_6' => 'City',
      'form_field_6_placeholder' => 'City',
      'form_field_7' => 'Mail',
      'form_field_7_placeholder' => '@',
      'form_field_8' => 'Phone',
      'form_field_8_placeholder' => 'format: 06 01 02 03 04',
      'form_field_9' => 'Message',
      'form_field_9_placeholder' => 'Enter your message here (maximum 3000 characters)',
      'form_p_1' => 'This information is required',
      'form_p_2' => 'I accept the <a href="mentions.php"> privacy policy </a> of the site',
      'form_submit' => 'Submit',
      // Index
      'index_title' => 'B3D | Home',
      // Mentions
      'mentions_title' => 'B3D | Legal Notice',
      'mentions_h1' => 'Legal Notice',
      'mentions_p' => 'In accordance with articles 6, 19 and 20 of the law n ° 2004-575 of June 21, 2004 for the Confidence in the digital economy, it is brought to the knowledge of the users and visitor of the site B3D these legal notices. All users who browse, read, view and use the B3D website are considered as users. Access and use of the site are subject to this legal notice and the applicable laws and regulations; and imply full and unreserved acceptance of the user of all the provisions of these terms.',
      'mentions_legals' => 'Legal information',
      'mentions_legals_p' => 'It is specified in this article the identity of the various stakeholders in the context of the realization and monitoring of the site. <br> The site B3D was realized by <a href = "https://corrtech.fr/" target = "_ blank"> CorrTech </a> domiciled at the House of Wood Pole, 22 Avenue Dr. Albert Schweitzer, 19000 Tulle. <br> The site is managed and administered by the company B3D - PIQUETS, RONDINS, SARL registered at RCS D \'AGEN under n ° 839 044 237, capital of 10.000,00 €, whose registered office is located: "l \' Intendant" 47700 Poussignac, taken in the person of its manager in exercise; and by the providers that said company will have to choose for the management and the administration of the site.',
      'mentions_privacy' => 'Privacy policy',
      'mentions_privacy_p_1' => 'In accordance with the provisions of European Regulation 2016/679, known as "RGPD", it is specified that the personal data that can be collected are as follows:',
      'mentions_privacy_li_1' => '<li> Identification data </ li>
       <li> Postal, telephone and electronic contact information </ li>
       <li> Status (individual or professional) </ li>',
      'mentions_privacy_p_2' => 'This data is collected <em> only </ em> when the user voluntarily communicates with the B3D company through the online contact form. This data is necessary for the processing of requests submitted by this intermediary. Nominative information is exclusively collected for internal use and will not be transmitted to third parties.',
      'mentions_privacy_p_3' => 'In accordance with the regulations, you have the right to access, modify, rectify and delete data concerning you. To do this, the user should contact:',
      'mentions_privacy_li_2' => '      <li>Société B3D</li>
            <li>"l\'Intendant"</li>
            <li>47700 Poussignac</li>
            <li>Tél : 01 23 45 67 89</li>',
      // Plan du site
      'plan_site_title' => 'B3D | Sitemap',
      'plan_site_h1' => 'Sitemap',
      'plan_site_society' => 'Society',
      'plan_site_products' => 'Products',
      'plan_site_products_acacia' => 'Acacia',
      'plan_site_products_pin' => 'Pine',
      'plan_site_products_chesnut' => 'Chesnut',
      'plan_site_products_wood' => 'Firewood',
      'plan_site_contact' => 'Contact',
      'plan_site_mentions' => 'Mentions',
      'plan_site_plan_site' => 'Sitemap',
      ),
// SPANISH ////////////////////////////////////////////////////////////////////
    'spanish' => array(
      // Header
      'menu_home' => 'Bienvenida',
      'menu_society' => 'Empresa',
      'menu_products' => 'Productos',
      'menu_products_chestnut' => 'Castaña',
      'menu_products_pine' => 'Pino',
      'menu_products_acacia' => 'Acacia',
      'menu_products_wood' => 'Leña',
      'menu_contact' => 'Contactar',
      'menu_langue' => 'Lengua',
      'menu_langue_french' => 'Français',
      'menu_langue_deutsch' => 'Deutsh',
      'menu_langue_english' => 'English',
      'menu_langue_spanish' => 'Español',
      // Footer
      'footer_plan_du_site' => 'Plano del sitio',
      'footer_copyright' => 'Copyright (c) 2018 Copyright Holder All Rights Reserved.',
      'footer_mentions' => 'Notas legales',
      // Modal
      'modal_header' => 'Comparación de emisiones de CO2 para la fabricación de pilotes de hormigón, acero y madera.',
      'modal_body' => '<table>
        <tr>
          <th>Pilotes de concreto</th>
          <th>Pilotes de acero</th>
          <th>Pilas de madera</th>
        </tr>
        <tr>
          <td>
          Producción de hormigón armado: 367 kg CO2 / tonelada (Ademe) Extracción de granulados: 88 kg CO2 / ton (Ademe)
          </td>
          <td>
          Producción de acero: 3190 kg de CO2 / tonelada (Ademe).
          </td>
          <td>Producción de madera: 36,7 kg CO2 / tonelada (Ademe)</td>
        </tr>
        <tr>
          <td>P Concreto : 2200 kg/m3</td>
          <td>P Acero : 7 500 kg/m3</td>
          <td>P Madera : 700 kg/m3</td>
        </tr>
        <tr>
          <td>Masa de CO2 emitida : 319 kg</td>
          <td>Masa de CO2 emitida : 8455 kg</td>
          <td>Masa de CO2 emitida : 9kg</td>
        </tr>
        <tr>
          <td>Transporte grannulats : 10 kg de CO2</td>
          <td>-</td>
          <td>Transporte de 10 registros a lo largo de 60 km: Vehículo (GVWR): de 3,51 a 5 toneladas Emisión de CO2 a plena carga: 175 g / km (Ademe) Emisiones de CO2: 10,5 kg o 1 kg de CO2 por registro.</td>
        </tr>
        <tr>
          <td>Masa de CO2 emitida : 329 kg</td>
          <td>Masa de CO2 emitida : 8 455 kg</td>
          <td>Masa de CO2 emitida : 10 kg</td>
        </tr>
      </table>',
      'modal_footer' => 'Los resultados obtenidos muestran que la fabricación de una pila de madera emite aproximadamente 30 veces menos CO2 que la fabricación de una pila de hormigón y 850 veces menos que la de una pila de acero.',
      // Section-Contact
      'section_c_title' => 'Estamos en contacto',
      'section_c_tel_s' => 'Teléfono :',
      'section_c_tel' => ' 06 95 51 77 05',
      'section_c_mail_s' => 'Email :',
      'section_c_mail' => ' julien.procedes@orange.fr',
      'section_c_adresse_s' => 'Dirección :',
      'section_c_adresse' => ' " l\'Intendant " 47700 Poussignac',
      'section_c_horaire_s' => 'Horario de apertura :',
      'section_c_horaire' => ' De lunes a viernes de 8h a 12h de 14h a 18h y sábados de 9h a 12h',
      // Société
      'society_title' => 'B3D | Empresa',
      'society_hist_title' => 'Nuestra historia',
      'society_hist_p' => 'Nuestra empresa está ubicada en Poussignac, en Lot-et-Garonne, a las puertas del macizo de las Landas y más cerca del recurso forestal. En los años 80, mi padre construyó un aserradero de pino marítimo cerrado en 2015. En 2018, después de trabajar en varias organizaciones y empresas de la industria de la madera, decidí regresar al sitio familiar para instalar una planta. fabricación de estacas de madera. <br> <br> Con 20 años de experiencia en la industria de la madera, quise volver a lo básico estableciéndome en el antiguo aserradero familiar ubicado más cerca del recurso forestal. <br> <br> Me especialicé en la fabricación de piquetes y troncos de acacia, pino o castaño. <br> <br> Mi herramienta de producción flexible y flexible permite producir postes o troncos redondeados de diferentes dimensiones. <br> <br> Para los cultivadores, paisajistas, arboricultores, o simplemente para las personas que desean crear una cerca o un jardín, las estacas o los troncos B3D son una apuesta segura.',
      'society_sav_title' => 'Nuestro know-how',
      'society_sav_p' => 'La presencia de una variedad de especies de madera locales ha guiado mi elección en una herramienta de procesamiento flexible y flexible para producir estacas de acacia, pino y castaño de diferentes tamaños. Dependiendo de la especie y el diámetro de la madera procesada, se realizan dos operaciones. Una operación de cepillado para llevar una superficie plana y lisa a las maderas redondas o una operación de ranura que permite seguir el hilo de la madera. Madera y mantener la resistencia mecánica de la madera y evitar las deformaciones por secado. Como medida de precaución sanitaria, se realiza una operación de descortezado para cada especie de madera. <br> <br> Esta operación permite evitar el transporte de parásitos como insectos xilófagos en el sitio de la clientela. La satisfacción del cliente es nuestro objetivo principal y el control de calidad del producto se logra en cada etapa del procesamiento.',
      'society_products_title' => 'Nuestros productos',
      'society_products_p' => 'Nuestras estacas y troncos se producen a partir de troncos operados en un radio de 70 km. El pino proviene de esquejes de adelgazamiento plantados después de la tormenta de 1999. <br> <br> Estas maderas juveniles comúnmente utilizadas para el establecimiento de redes contra el granizo o enrejado tienen una proporción muy baja de madera dura que les da Muy buena capacidad para el tratamiento con autoclave. <br> <br> Nuestros troncos de acacia tienen una cantidad muy pequeña de albura y anillos de crecimiento apretados que le dan a la madera una excelente durabilidad natural y muy buena resistencia mecánica.<br><br> Toda nuestra madera proviene de cortes gestionados de forma sostenible y generalmente se beneficia de la certificación PEFC.',
      // PRODUCTS Acacia
      'acacia_title' => 'B3D | Acacia',
      'acacia_h1' => 'Acacia',
      'acacia_use' => 'Usos',
      'acacia_use_p' => 'Todos nuestros productos de acacia están marcados para aportar más estética y limpieza a las estacas, pero especialmente para evitar el transporte de parásitos como insectos xilófagos en el sitio de la clientela. <br> <br> Nuestras estacas de acacia están divididas o aplanado y una punta cuadrada de un área entre 1 y 1,5 cm² se hace grande. <br> <br> La operación de la ranura permite que la madera mantenga su resistencia mecánica y limite la deformación del secado.',
      'acacia_carousel_1' => 'Acacia Log',
      'acacia_carousel_2' => 'Fagots de piquetes de acacia.',
      'acacia_carousel_3' => 'Valla en estacas de acacia.',
      'acacia_table_1_title' => 'Apuestas divididas',
      'acacia_table_1_content' => '<table>
        <tr>
          <th colspan="2">Longitudes</th>
          <th>1m 40</th>
          <th>1m 80</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
        </tr>
        <tr>
          <td rowspan="4">Perímetros extremo final</td>
          <td>19/23 cm</td>
          <td colspan="3">160 pièces / paleta</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>23/26 cm</td>
          <td colspan="4">150 pièces / paleta</td>
          <td>-</td>
        </tr>
        <tr>
          <td>26/29 cm</td>
          <td colspan="5">130 pièces / paleta</td>
        </tr>
        <tr>
          <td>29 cm et plus</td>
          <td>-</td>
          <td colspan="4">110 pièces / paleta</td>
        </tr>
      </table>',
      'acacia_table_2_title' => 'Estacas redondas',
      'acacia_table_2_content' => '<table>
        <tr>
          <th colspan="2">Longitudes</th>
          <th>1m 80</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
          <th>3m 00</th>
          <th>4m 00</th>
        </tr>
        <tr>
          <td rowspan="4">Diámetros finos finos</td>
          <td>6/8 cm</td>
          <td colspan="3">80 pièces / paleta</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>8/10 cm</td>
          <td colspan="4">71 pièces / paleta</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>10/12 cm</td>
          <td colspan="6">56 pièces / paleta</td>
        </tr>
        <tr>
          <td>12/15 cm</td>
          <td colspan="6">42 pièces / paleta</td>
        </tr>
      </table>',
      // PRODUCTS Bois de chauffe
      'bois_chauffe_title' => 'B3D | Leña',
      'bois_chauffe_h1' => 'Leña',
      'bois_chauffe_carac' => 'Especificaciones',
      'bois_chauffe_carac_p' => 'Nuestra leña proveniente de nuestra producción de estacas de acacia se vende en paquetes de 2 o 2.5 steres o troncos partidos de 30 cm.',
      'bois_chauffe_carousel_1' => 'Title 1',
      'bois_chauffe_carousel_2' => 'Title 2',
      'bois_chauffe_carousel_3' => 'Title 3',
      // PRODUCTS Châtaignier
      'chataigner_title' => 'B3D | Castaña',
      'chataigner_h1' => 'Castaña',
      'chataigner_use' => 'Usos',
      'chataigner_use_p' => 'Menos duradera en el tiempo que la acacia, la castaña sigue siendo una esencia.
       Imputrescible gracias a su presencia de ácido tánico. <br> <br>
       Todos nuestros productos de castaño están marcados para aportar más estética y limpieza.
       Piquetes, pero especialmente para evitar el transporte de parásitos en el sitio de los clientes.
       Nuestras estacas de acacia son ranuradas o planas y una punta cuadrada con un área entre 1 y 1.5
       cm² se hace gran final. <br> <br>
       La operación de la ranura permite que la madera mantenga su resistencia mecánica y su límite.
       Deformaciones de secado.',
      'chataigner_carousel_1' => 'Tronco de castaño',
      'chataigner_carousel_2' => 'Tronco de castaño',
      'chataigner_carousel_3' => 'Tronco de castaño',
      'chataigner_table_1_title' => 'Estacas de castaño',
      'chataigner_table_1_content' => '<table>
        <tr>
          <th colspan="2">Longitudes</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
        </tr>
        <tr>
          <td rowspan="2">Perímetros finales finales</td>
          <td>24/29 cm</td>
          <td colspan="3">130 pièces / paleta</td>
        </tr>
        <tr>
          <td>28 cm et +</td>
          <td colspan="4">110 pièces / paleta</td>
        </tr>
      </table>',
      // PRODUCTS Pin
      'pin_title' => 'B3D | Pino',
      'pin_h1' => 'Pino',
      'pin_use' => 'Usos',
      'pin_use_p' => 'Nuestros pines y polos son planos y la punta cuadrada de una superficie entre 1 y 1,5 cm² se hace grande.
       La calidad de nuestra madera cumple con las especificaciones de la norma NF B 50-100-3 para un uso de clase IV después de haber sido sometida a un tratamiento de autoclave utilizando el proceso de vacío Bethell y una presión de 12 bares en una estación certificada por CTB B +. <br>
       La proporción de duramen presente en nuestros pinos es baja, lo que permite la penetración y retención del conservante óptimo para aumentar la longevidad de nuestras estacas y postes.',
      'pin_carousel_1' => 'Tronco de pino',
      'pin_carousel_2' => 'Estacas de pino',
      'pin_carousel_3' => 'Estacas de pino',
      'pin_table_1_title' => 'Piquetes de vino',
      'pin_table_1_content' => '<table >
      	<tbody>
      		<tr>
      			<td colspan="2">Longitudes</td>
      			<td>2m 00</td>
      			<td>2m 30</td>
      			<td>2m 50</td>
      		</tr>
      		<tr>
      			<td rowspan="3"><span class="verticalCells">Diámetros extremo final</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 pièces / paleta</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="3">72 pièces / paleta</td>
      		</tr>
      		<tr>
      			<td>12/14 cm</td>
      			<td colspan="3">56 pièces / paleta</td>
      		</tr>
      	</tbody>
      </table>',
      'pin_table_2_title' => 'Postes de arbol',
      'pin_table_2_content' => '<table>
      	<tbody>
      		<tr>
      			<td colspan="2">Longitudes</td>
      			<td>2m 50</td>
      			<td>2m 80</td>
      			<td>3m 00</td>
      			<td>3m 50</td>
      			<td>4m 00</td>
      			<td>4m 50</td>
      			<td>5m 00</td>
      		</tr>
      		<tr>
      			<td rowspan="4"><span class="verticalCells">Diámetros extremo final</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 pièces / paleta</td>
      			<td colspan="4">-</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="4">72 pièces / paleta</td>
      			<td colspan="3">64 pièces / paleta</td>
      		</tr>
      		<tr>
            <td>12/14 cm</td>
      			<td colspan="4">56 pièces / paleta</td>
      			<td colspan="3">48 pièces / paleta</td>
      		</tr>
      		<tr>
            <td>14/16 cm</td>
      			<td colspan="4">42 pièces / paleta</td>
      			<td colspan="3">36 pièces / paleta</td>
      		</tr>
      	</tbody>
      </table>',
      // Contact
      'contact_title' => 'B3D | Contactar',
      'form_field_1_1' => 'Usted es...',
      'form_field_1_2' => 'Por favor elija',
      'form_field_1_3' => 'un particular',
      'form_field_1_4' => 'un profesional',
      'form_field_1_5' => 'otro',
      'form_field_2' => 'Primer nombre',
      'form_field_2_placeholder' => 'Vuestro primer nombre',
      'form_field_3' => 'Apellido',
      'form_field_3_placeholder' => 'Vuestro nombre',
      'form_field_4' => 'Dirección',
      'form_field_4_placeholder' => 'Su dirección',
      'form_field_5' => 'Código postal',
      'form_field_5_placeholder' => 'Código postal',
      'form_field_6' => 'Ciudad',
      'form_field_6_placeholder' => 'Ciudad',
      'form_field_7' => 'Email',
      'form_field_7_placeholder' => '@',
      'form_field_8' => 'Teléfono',
      'form_field_8_placeholder' => 'formato: 06 01 02 03 04',
      'form_field_9' => 'Mensaje',
      'form_field_9_placeholder' => 'Ingrese su mensaje aquí (máximo 3000 caracteres)',
      'form_p_1' => 'Esta informacion es requerida',
      'form_p_2' => 'Acepto la <a href="mentions.php"> política de privacidad </a> del sitio',
      'form_submit' => 'Enviar a',
      // Index
      'index_title' => 'B3D | Bienvenida',
      // Mentions
      'mentions_title' => 'B3D | Notas legales',
      'mentions_h1' => 'Notas legales',
      'mentions_p' => 'De conformidad con los artículos 6, 19 y 20 de la ley n ° 2004-575 de 21 de junio de 2004 para la Confianza en la economía digital, se informa al usuario y al visitante del sitio B3D sobre estos avisos legales. Todos los usuarios que navegan, leen, ven y usan el sitio web de B3D se consideran usuarios. El acceso y el uso del sitio están sujetos a este aviso legal y las leyes y regulaciones aplicables; e implica la aceptación plena y sin reservas del usuario de todas las disposiciones de estos términos.',
      'mentions_legals' => 'Notas legales',
      'mentions_legals_p' => 'Se especifica en este artículo la identidad de los distintos interesados en el contexto de la realización y el monitoreo del sitio. <br> El sitio B3D se realizó mediante <a href = "https://corrtech.fr/" target = "_ blank"> CorrTech </a> domiciliado en la Casa de Wood Pole, 22 Avenue Dr. Albert Schweitzer, 19000 Tulle. El sitio está administrado y administrado por la compañía B3D - PIQUETS, RONDINS, SARL registrada en RCS D \'AGEN bajo n ° 839 044 237, capital de 10,000,00 €, cuyo domicilio social se encuentra: "l \' Intendente" 47700 Poussignac, tomado en persona de su gerente en ejercicio; y por los proveedores que dicha empresa tendrá que elegir para la gestión y la administración del sitio.',
      'mentions_privacy' => 'Política de confidencialidad',
      'mentions_privacy_p_1' => 'De acuerdo con las disposiciones del Reglamento Europeo 2016/679, conocido como "RGPD", se especifica que los datos personales que se pueden recopilar son los siguientes:',
      'mentions_privacy_li_1' => '<li> Datos de identificación </ li>
       <li> Información de contacto postal, telefónica y electrónica </ li>
       <li> Estado (individual o profesional) </ li>',
      'mentions_privacy_p_2' => 'Estos datos se recopilan <em> solo </ em> cuando el usuario se comunica voluntariamente con la compañía B3D a través del formulario de contacto en línea. Estos datos son necesarios para el procesamiento de las solicitudes enviadas por este intermediario. La información nominativa se recopila exclusivamente para uso interno y no se transmitirá a terceros.',
      'mentions_privacy_p_3' => 'De acuerdo con las regulaciones, usted tiene derecho a acceder, modificar, rectificar y eliminar los datos que le conciernen. Para ello, el usuario debe contactar con:',
      'mentions_privacy_li_2' => '     <li>Société B3D</li>
            <li>"l\'Intendant"</li>
            <li>47700 Poussignac</li>
            <li>Tél : 01 23 45 67 89</li>',
      // Plan du site
      'plan_site_title' => 'B3D | Plano del sitio',
      'plan_site_h1' => 'Plano del sitio',
      'plan_site_society' => 'Empresa',
      'plan_site_products' => 'Productos',
      'plan_site_products_acacia' => 'Acacia',
      'plan_site_products_pin' => 'Pino',
      'plan_site_products_chesnut' => 'Castaña',
      'plan_site_products_wood' => 'Leña',
      'plan_site_contact' => 'Contactar',
      'plan_site_mentions' => 'Menciones',
      'plan_site_plan_site' => 'Plano del sitio',
      ),
// DEUTSCH ////////////////////////////////////////////////////////////////////
    'germany' => array(
      // Header
      'menu_home' => 'Willkommen',
      'menu_society' => 'Unternehmen',
      'menu_products' => 'Produkte',
      'menu_products_chestnut' => 'Kastanie',
      'menu_products_pine' => 'Kiefer',
      'menu_products_acacia' => 'Akazie',
      'menu_products_wood' => 'Brennholz',
      'menu_contact' => 'Kontakt',
      'menu_langue' => 'Sprache',
      'menu_langue_french' => 'Français',
      'menu_langue_deutsch' => 'Deutsh',
      'menu_langue_english' => 'English',
      'menu_langue_spanish' => 'Español',
      // Footer
      'footer_plan_du_site' => 'Sitemap',
      'footer_copyright' => 'Copyright (c) 2018 Copyright Holder All Rights Reserved.',
      'footer_mentions' => 'Rechtliche Hinweise',
      // Modal
      'modal_header' => 'Vergleich der CO2-Emissionen bei der Herstellung von Beton-, Stahl- und Holzpfählen.',
      'modal_body' => '<table>
        <tr>
          <th>Betonpfähle</th>
          <th>Stahlpfähle</th>
          <th>Holzpfähle</th>
        </tr>
        <tr>
          <td>
          Produktion von Stahlbeton: 367 kg CO2 / t (Ademe) Gewinnung von Granulaten: 88 kg CO2 / t (Ademe)</td>
          <td>
          Stahlproduktion: 3190 kg CO2 / Tonne (Ademe).
          </td>
          <td>Schnittholzproduktion: 36,7 kg CO2 / Tonne (Ademe)</td>
        </tr>
        <tr>
          <td>P Beton : 2200 kg/m3</td>
          <td>P Stahl : 7 500 kg/m3</td>
          <td>P Holz : 700 kg/m3</td>
        </tr>
        <tr>
          <td>Emittierte CO2-Masse : 319 kg</td>
          <td>Emittierte CO2-Masse : 8455 kg</td>
          <td>Emittierte CO2-Masse : 9kg</td>
        </tr>
        <tr>
          <td>Transportgrannulats: 10 kg CO2</td>
          <td>-</td>
          <td>Transport von 10 Holzstämmen über 60 km: Fahrzeug (GVWR): von 3,51 bis 5 Tonnen CO2-Emissionen bei Volllast: 175 g / km (Ademe) CO2-Emissionen: 10,5 kg oder 1 kg CO2 pro Holzstamm.</td>
        </tr>
        <tr>
          <td>Emittierte CO2-Masse : 329 kg</td>
          <td>Emittierte CO2-Masse : 8 455 kg</td>
          <td>Emittierte CO2-Masse : 10 kg</td>
        </tr>
      </table>',
      'modal_footer' => 'Die erzielten Ergebnisse zeigen, dass bei der Herstellung eines Holzpfahls etwa 30 Mal weniger CO2 freigesetzt wird als bei der Herstellung eines Betonpfahls und 850 Mal weniger als bei einem Stahlpfahl.',
      // Section-Contact
      'section_c_title' => 'Bleiben wir in Kontakt',
      'section_c_tel_s' => 'Telefon :',
      'section_c_tel' => ' 06 95 51 77 05',
      'section_c_mail_s' => 'Email :',
      'section_c_mail' => ' julien.procedes@orange.fr',
      'section_c_adresse_s' => 'Adresse :',
      'section_c_adresse' => ' " l\'Intendant " 47700 Poussignac',
      'section_c_horaire_s' => 'Öffnungszeiten :',
      'section_c_horaire' => ' Montag bis Freitag 8h-12h 14h-18h und Samstag 9h-12h',
      // Société
      'society_title' => 'B3D | Unternehmen',
      'society_hist_title' => 'Unsere geschichte',
      'society_hist_p' => 'Unser Unternehmen befindet sich in Poussignac in Lot-et-Garonne vor den Toren des Landesmassivs und näher an der Waldressource. In den 80er Jahren baute mein Vater ein maritimes Kiefernsägewerk, das 2015 geschlossen wurde. Nachdem ich in verschiedenen Organisationen und Unternehmen der Holzindustrie gearbeitet hatte, entschied ich mich 2018, zum Familienstandort zurückzukehren, um eine Anlage zu installieren. Herstellung von Holzstäben. <br> <br> Mit 20 Jahren Erfahrung in der Holzindustrie wollte ich mich mit dem alten Familiensägewerk, das sich näher an der Waldressource befindet, ansiedeln . <br> Ich habe mich auf die Herstellung von Streikposten und Stämmen aus Akazien, Kiefern oder Kastanien spezialisiert. <br> <br> Mit meinem flexiblen und flexiblen Fertigungswerkzeug können Stangen oder Rundstämme unterschiedlicher Abmessungen hergestellt werden. <br> <br> Für Züchter, Landschaftsgärtner, Baumzüchter oder einfach nur für Einzelpersonen, die einen Zaun oder Garten anlegen möchten, sind Pfähle oder Baumstämme von B3D eine sichere Wahl.',
      'society_sav_title' => 'Unser Know-how',
      'society_sav_p' => 'Das Vorhandensein einer Vielzahl lokaler Holzarten hat meine Wahl auf ein flexibles und flexibles Verarbeitungswerkzeug zur Herstellung von Akazien-, Kiefern- und Kastanienpfählen unterschiedlicher Größe gerichtet. Abhängig von der Holzart und dem Durchmesser des verarbeiteten Holzes werden zwei Vorgänge ausgeführt. Ein Hobelvorgang, um eine ebene und glatte Oberfläche zu den Rundhölzern zu bringen, oder eine Schlitzoperation, die es ermöglicht, dem Faden des zu folgen Holz und erhalten die mechanische Festigkeit von Holz und vermeiden Verformungen durch Trocknung. Als sanitäre Vorsichtsmaßnahme wird für jede Holzart eine Entrindungsoperation durchgeführt. Diese Operation ermöglicht es, das Tragen von Parasiten wie xylophagenen Insekten auf dem Gelände der Kundschaft zu vermeiden. Kundenzufriedenheit ist unser oberstes Ziel, und die Produktqualitätskontrolle wird auf jeder Verarbeitungsstufe erreicht.',
      'society_products_title' => 'Unsere produkte',
      'society_products_p' => 'Unsere Pfähle und Protokolle werden aus Rundholz hergestellt, das im Umkreis von 70 km betrieben wird. Die Kiefer stammt aus dünner werdenden Stecklingen, die nach dem Sturm von 1999 gepflanzt wurden. <br> <br> Diese Jugendhölzer, die üblicherweise für die Einrichtung von Hagelschutznetzen oder für das Spalieren verwendet werden, haben einen sehr geringen Kernholzanteil Sehr gute Autoklavierbarkeit. <br> <br> Unsere Akazienstämme haben eine sehr geringe Menge Splintholz und enge Wachstumsringe, die dem Holz eine hervorragende natürliche Haltbarkeit und sehr gute mechanische Festigkeit verleihen. > <br> Unser gesamtes Holz stammt aus nachhaltig bewirtschafteten Schnitten und profitiert generell von der PEFC-Zertifizierung.',
      // PRODUCTS Acacia
      'acacia_title' => 'B3D | Akazie',
      'acacia_h1' => 'Akazie',
      'acacia_use' => 'Anwendungen',
      'acacia_use_p' => 'Alle unsere Akazienprodukte werden entrindet, um den Pfählen mehr Ästhetik und Sauberkeit zu bieten, vor allem aber den Transport von Parasiten wie xylophagous Insekten auf dem Gelände der Kundschaft zu vermeiden. <br> <br> Unsere Akazienpfähle sind gespalten oder abgeflacht, und ein quadratischer Punkt einer Fläche zwischen 1 und 1,5 cm² wird zu einem großen Ende gemacht. <br> Durch den Schlitzbetrieb kann das Holz seine mechanische Festigkeit beibehalten und die Verformung des Trocknens begrenzen.',
      'acacia_carousel_1' => 'Acacia Log',
      'acacia_carousel_2' => 'Streichen von Streikposten der Akazie',
      'acacia_carousel_3' => 'Zaun in Akazienpfählen',
      'acacia_table_1_title' => 'Split-Einsätze',
      'acacia_table_1_content' => '<table>
        <tr>
          <th colspan="2">Längen</th>
          <th>1m 40</th>
          <th>1m 80</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
        </tr>
        <tr>
          <td rowspan="4">Umfang Ende</td>
          <td>19/23 cm</td>
          <td colspan="3">160 pièces / palette</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>23/26 cm</td>
          <td colspan="4">150 pièces / palette</td>
          <td>-</td>
        </tr>
        <tr>
          <td>26/29 cm</td>
          <td colspan="5">130 pièces / palette</td>
        </tr>
        <tr>
          <td>29 cm et plus</td>
          <td>-</td>
          <td colspan="4">110 pièces / palette</td>
        </tr>
      </table>',
      'acacia_table_2_title' => 'Runde Einsätze',
      'acacia_table_2_content' => '<table>
        <tr>
          <th colspan="2">Längen</th>
          <th>1m 80</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
          <th>3m 00</th>
          <th>4m 00</th>
        </tr>
        <tr>
          <td rowspan="4">Feine Enddurchmesser</td>
          <td>6/8 cm</td>
          <td colspan="3">80 pièces / palette</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>8/10 cm</td>
          <td colspan="4">71 pièces / palette</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>10/12 cm</td>
          <td colspan="6">56 pièces / palette</td>
        </tr>
        <tr>
          <td>12/15 cm</td>
          <td colspan="6">42 pièces / palette</td>
        </tr>
      </table>',
      // PRODUCTS Bois de chauffe
      'bois_chauffe_title' => 'B3D | Brennholz',
      'bois_chauffe_h1' => 'Brennholz',
      'bois_chauffe_carac' => 'Spezifikationen',
      'bois_chauffe_carac_p' => 'Unser Brennholz aus unserer Akazienproduktion wird in Bündeln von 2 oder 2,5 Steres oder 30-cm-Spaltholz verkauft.',
      'bois_chauffe_carousel_1' => 'Title 1',
      'bois_chauffe_carousel_2' => 'Title 2',
      'bois_chauffe_carousel_3' => 'Title 3',
      // PRODUCTS Châtaignier
      'chataigner_title' => 'B3D | Kastanie',
      'chataigner_h1' => 'Kastanie',
      'chataigner_use' => 'Anwendungen',
      'chataigner_use_p' => 'Weniger langlebig als Akazien, bleibt Kastanie dennoch eine Essenz
       unbestreitbar dank der Anwesenheit von Tanasäure. <br> <br>
       Alle unsere Kastanienprodukte sind gerippt, um mehr Ästhetik und Sauberkeit zu bieten
       Streikposten, vor allem aber, um das Tragen von Parasiten auf dem Gelände der Kunden zu vermeiden.
       Unsere Akazienpfähle sind geschlitzt oder flach und haben eine quadratische Spitze mit einer Fläche zwischen 1 und 1,5
       cm² wird grosses Ende gemacht. <br> <br>
       Der Schlitzbetrieb erlaubt es dem Holz, seine mechanische Festigkeit und Begrenzung beizubehalten
       Trocknungsverformungen.',
      'chataigner_carousel_1' => 'Kastanien-Protokoll',
      'chataigner_carousel_2' => 'Kastanien-Protokoll',
      'chataigner_carousel_3' => 'Kastanien-Protokoll',
      'chataigner_table_1_title' => 'Kastanienpfähle',
      'chataigner_table_1_content' => '<table>
        <tr>
          <th colspan="2">Längen</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
        </tr>
        <tr>
          <td rowspan="2">Perimeter spätes Ende</td>
          <td>24/29 cm</td>
          <td colspan="3">130 pièces / palette</td>
        </tr>
        <tr>
          <td>28 cm et +</td>
          <td colspan="4">110 pièces / palette</td>
        </tr>
      </table>',
      // PRODUCTS Pin
      'pin_title' => 'B3D | Kiefer',
      'pin_h1' => 'Kiefer',
      'pin_use' => 'Anwendungen',
      'pin_use_p' => 'Unsere Stifte und Stifte sind flach und eine quadratische Spitze mit einer Fläche zwischen 1 und 1,5 cm² ist ein großes Ende.
       Die Qualität unseres Holzes entspricht den Anforderungen der Norm NF B 50-100-3 für eine Klasse IV-Verwendung, nachdem es einer Autoklavenbehandlung im Vakuum-Bethell-Verfahren und einem Druck von 12 bar in einer CTB B + -zertifizierten Station unterzogen wurde. <br>
       Der Anteil des Kernholzes in unseren Kiefern ist gering, so dass ein optimales Konservierungsmittel eindringen und aufbewahrt werden kann, um die Lebensdauer unserer Pfähle und Stöcke zu erhöhen.',
      'pin_carousel_1' => 'Pine Log',
      'pin_carousel_2' => 'Kieferpfähle',
      'pin_carousel_3' => 'Kieferpfähle',
      'pin_table_1_title' => 'Weinpickets',
      'pin_table_1_content' => '<table >
      	<tbody>
      		<tr>
      			<td colspan="2">Längen</td>
      			<td>2m 00</td>
      			<td>2m 30</td>
      			<td>2m 50</td>
      		</tr>
      		<tr>
      			<td rowspan="3"><span class="verticalCells">Durchmesser Ende Ende</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 pièces / palette</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="3">72 pièces / palette</td>
      		</tr>
      		<tr>
      			<td>12/14 cm</td>
      			<td colspan="3">56 pièces / palette</td>
      		</tr>
      	</tbody>
      </table>',
      'pin_table_2_title' => 'Baumpfosten',
      'pin_table_2_content' => '<table>
      	<tbody>
      		<tr>
      			<td colspan="2">Längen</td>
      			<td>2m 50</td>
      			<td>2m 80</td>
      			<td>3m 00</td>
      			<td>3m 50</td>
      			<td>4m 00</td>
      			<td>4m 50</td>
      			<td>5m 00</td>
      		</tr>
      		<tr>
      			<td rowspan="4"><span class="verticalCells">Durchmesser Ende Ende</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 pièces / palette</td>
      			<td colspan="4">-</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="4">72 pièces / palette</td>
      			<td colspan="3">64 pièces / palette</td>
      		</tr>
      		<tr>
            <td>12/14 cm</td>
      			<td colspan="4">56 pièces / palette</td>
      			<td colspan="3">48 pièces / palette</td>
      		</tr>
      		<tr>
            <td>14/16 cm</td>
      			<td colspan="4">42 pièces / palette</td>
      			<td colspan="3">36 pièces / palette</td>
      		</tr>
      	</tbody>
      </table>',
      // Contact
      'contact_title' => 'B3D | Kontakt',
      'form_field_1_1' => 'Du bist ...',
      'form_field_1_2' => 'Bitte wählen',
      'form_field_1_3' => 'ein bestimmtes',
      'form_field_1_4' => 'ein professioneller',
      'form_field_1_5' => 'andere',
      'form_field_2' => 'Vorname',
      'form_field_2_placeholder' => 'Dein Vorname',
      'form_field_3' => 'Name',
      'form_field_3_placeholder' => 'Dein Name',
      'form_field_4' => 'Adresse',
      'form_field_4_placeholder' => 'Ihre Adresse',
      'form_field_5' => 'Postleitzahl',
      'form_field_5_placeholder' => 'Postleitzahl',
      'form_field_6' => 'Stadt',
      'form_field_6_placeholder' => 'Stadt',
      'form_field_7' => 'Email',
      'form_field_7_placeholder' => '@',
      'form_field_8' => 'Telefon',
      'form_field_8_placeholder' => 'format: 06 01 02 03 04',
      'form_field_9' => 'Nachricht',
      'form_field_9_placeholder' => 'Geben Sie hier Ihre Nachricht ein (maximal 3000 Zeichen)',
      'form_p_1' => 'Diese Informationen sind erforderlich',
      'form_p_2' => 'Ich akzeptiere die <a href="mentions.php"> Datenschutzerklärung </a> der Site',
      'form_submit' => 'Senden',
      // Index
      'index_title' => 'B3D | Willkommen',
      // Mentions
      'mentions_title' => 'B3D | Rechtliche Hinweise',
      'mentions_h1' => 'Rechtliche Hinweise',
      'mentions_p' => 'In Übereinstimmung mit den Artikeln 6, 19 und 20 des Gesetzes Nr. 2004-575 vom 21. Juni 2004 für das Vertrauen in die digitale Wirtschaft werden diese rechtlichen Hinweise den Nutzern und Besuchern der Site B3D zur Kenntnis gebracht. Alle Benutzer, die die B3D-Website durchsuchen, lesen, anzeigen und verwenden, gelten als Benutzer. Zugang und Nutzung der Website unterliegen diesem rechtlichen Hinweis und den anwendbaren Gesetzen und Bestimmungen. und impliziert die uneingeschränkte und uneingeschränkte Zustimmung des Nutzers zu allen Bestimmungen dieser Bedingungen.',
      'mentions_legals' => 'Rechtliche Hinweise',
      'mentions_legals_p' => 'In diesem Artikel wird die Identität der verschiedenen Stakeholder im Zusammenhang mit der Realisierung und Überwachung der Website angegeben. <br> Die Website B3D wurde von <a href = "https://corrtech.fr/" target erstellt = "_ blank"> CorrTech </a> wohnhaft am House of Wood Pole, 22 Avenue Dr. Albert Schweitzer, 19000 Tulle. <br> Die Website wird von der bei RCS registrierten Firma B3D - PIQUETS, RONDINS, SARL verwaltet und verwaltet D\'AGEN unter Nr. 839 044 237, Kapital von 10.000,00 €, mit Sitz: "l\'Intendant" 47700 Poussignac, in Person seines in Ausübung befindlichen Managers; und von den Anbietern, die das Unternehmen für die Verwaltung und Verwaltung der Site auswählen muss.',
      'mentions_privacy' => 'Datenschutzrichtlinie',
      'mentions_privacy_p_1' => 'Gemäß den Bestimmungen der europäischen Verordnung 2016/679 ("RGPD") wird festgelegt, dass folgende personenbezogene Daten erhoben werden können:',
      'mentions_privacy_li_1' => '<li> Identifikationsdaten </ li>
       <li> Post-, Telefon- und elektronische Kontaktinformationen </ li>
       <li> Status (individuell oder beruflich) </ li>',
      'mentions_privacy_p_2' => 'Diese Daten werden nur dann erhoben, wenn der Benutzer freiwillig über das Online-Kontaktformular mit dem Unternehmen B3D kommuniziert. Diese Daten sind für die Bearbeitung von Anfragen dieses Vermittlers erforderlich. Nominative Informationen werden ausschließlich für den internen Gebrauch erhoben und nicht an Dritte weitergegeben.',
      'mentions_privacy_p_3' => 'Gemäß den Bestimmungen haben Sie das Recht, auf Ihre persönlichen Daten zuzugreifen, sie zu ändern, zu korrigieren und zu löschen. Dazu sollte der Benutzer sich an folgende Adresse wenden:',
      'mentions_privacy_li_2' => '      <li>Société B3D</li>
            <li>"l\'Intendant"</li>
            <li>47700 Poussignac</li>
            <li>Tél : 01 23 45 67 89</li>',
      // Plan du site
      'plan_site_title' => 'B3D | Sitemap',
      'plan_site_h1' => 'Sitemap',
      'plan_site_society' => 'Unternehmen',
      'plan_site_products' => 'Produkte',
      'plan_site_products_acacia' => 'Akazie',
      'plan_site_products_pin' => 'Kiefer',
      'plan_site_products_chesnut' => 'Kastanie',
      'plan_site_products_wood' => 'Brennholz',
      'plan_site_contact' => 'Kontakt',
      'plan_site_mentions' => 'Erwähnungen',
      'plan_site_plan_site' => 'Sitemap',
      ),
  );

  if(empty($_SESSION['lang'])) {

    $_SESSION['translate'] = $translate['french'];
    $_SESSION['lang'] = 'Français';
  }
  else if(isset($_GET['lang'])) {

    if($_GET['lang'] == 'french') {
      $_SESSION['translate'] = $translate['french'];
      $_SESSION['lang'] = 'Français';
    }

    if($_GET['lang'] == 'english') {
      $_SESSION['translate'] = $translate['english'];
      $_SESSION['lang'] = 'English';
    }

    if($_GET['lang'] == 'spanish') {
      $_SESSION['translate'] = $translate['spanish'];
      $_SESSION['lang'] = 'Espagnol';
    }

    if($_GET['lang'] == 'germany') {
      $_SESSION['translate'] = $translate['germany'];
      $_SESSION['lang'] = 'Deutsch';
    }
  }
?>
