<?php
CREATE TABLE `a_voté_pour` (
    `idAlbum_Album` int(9) NOT NULL,
    `idMembre_membre` int(9) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
  

ALTER TABLE `a_voté_pour`
  ADD CONSTRAINT `FK_a_voté_pour_idAlbum_Album` FOREIGN KEY (`idAlbum_Album`) REFERENCES `album` (`idAlbum_Album`),
  ADD CONSTRAINT `FK_a_voté_pour_idMembre_membre` FOREIGN KEY (`idMembre_membre`) REFERENCES `membre` (`idMembre_membre`);
