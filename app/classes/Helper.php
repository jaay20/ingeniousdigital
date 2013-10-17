<?php 

class Helper {

    public static function helloWorld()
    {
        return 'Hello World';
    }
    
    public static function getAllProjects()
    {
        return Projects::all();
    }
    
    public static function getAllTechnologies()
    {
        return Technologies::all();
    }
    
    public static function getAllServices()
    {
        return Services::all();
    }
}