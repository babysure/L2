SELECT conference_porte.libelleporte AS Libellé portée conférence  
, COUNT(particip_conf.modparticip) AS Nbre_particip FROM conference_porte 
JOIN conferences ON conference_porte.porteconf = conferences.porteconf
JOIN particip_conf ON particip_conf.codconf = conferences.codconf
GROUP BY conference_porte.libelleporte ;
