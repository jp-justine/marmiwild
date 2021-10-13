<?php
require_once 'config.php';
require_once 'src/models/recipe-model.php';

/// Fetching all recipes

$recipes = getAllRecipes();

 // Generate the web page 

require_once 'src\views\index.php';

