SELECT membres.equipnum AS N_Equipe ,
COUNT(partcip_conf.modparticip) AS Nbre_particip
FROM membres
JOIN particip_conf ON membres.persnum = particip_conf.persnum
JOIN conference ON particip_conf.codconf = conference.codconf
WHERE conference.porte = 1
GROUP BY membres.equipnum ;
