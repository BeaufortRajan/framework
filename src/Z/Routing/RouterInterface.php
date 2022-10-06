<?php
namespace App\Z\Routing;

Interface RouterInterface
{
    /**
     * cette méthodedu Router recupere les controleurs et les trie et le sauvgarde dans l'armoire à routes en fonction de leur nom
     */
  public function sortRoutesByName():void ;
}
/**
         * Cette méthode du routeur permet de l'exécuter
         * 
         * Et elle nous retourne une réponse qui peut être : 
         *      - nulle si l'uri de l'url ne match pas avec l'uri de la route 
         *        dont l'application attend la réception
         *      - ou un tableau contenant le contrôleur censé gérer la requête si ça match 
         *
         * @return array|null
         */
        public function run() : ?array;
