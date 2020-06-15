<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit584576283f1a81410a7671c98177eec6
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'FileMaker' => __DIR__ . '/../..' . '/src/lib/FileMaker.php',
        'FileMaker_Command' => __DIR__ . '/../..' . '/src/lib/FileMaker/Command.php',
        'FileMaker_Command_Add' => __DIR__ . '/../..' . '/src/lib/FileMaker/Command/Add.php',
        'FileMaker_Command_Add_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/Command/AddImpl.php',
        'FileMaker_Command_CompoundFind' => __DIR__ . '/../..' . '/src/lib/FileMaker/Command/CompoundFind.php',
        'FileMaker_Command_CompoundFind_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/Command/CompoundFindImpl.php',
        'FileMaker_Command_Delete' => __DIR__ . '/../..' . '/src/lib/FileMaker/Command/Delete.php',
        'FileMaker_Command_Delete_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/Command/DeleteImpl.php',
        'FileMaker_Command_Duplicate' => __DIR__ . '/../..' . '/src/lib/FileMaker/Command/Duplicate.php',
        'FileMaker_Command_Duplicate_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/Command/DuplicateImpl.php',
        'FileMaker_Command_Edit' => __DIR__ . '/../..' . '/src/lib/FileMaker/Command/Edit.php',
        'FileMaker_Command_Edit_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/Command/EditImpl.php',
        'FileMaker_Command_Find' => __DIR__ . '/../..' . '/src/lib/FileMaker/Command/Find.php',
        'FileMaker_Command_FindAll' => __DIR__ . '/../..' . '/src/lib/FileMaker/Command/FindAll.php',
        'FileMaker_Command_FindAll_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/Command/FindAllImpl.php',
        'FileMaker_Command_FindAny' => __DIR__ . '/../..' . '/src/lib/FileMaker/Command/FindAny.php',
        'FileMaker_Command_FindAny_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/Command/FindAnyImpl.php',
        'FileMaker_Command_FindRequest' => __DIR__ . '/../..' . '/src/lib/FileMaker/Command/FindRequest.php',
        'FileMaker_Command_FindRequest_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/Command/FindRequestImpl.php',
        'FileMaker_Command_Find_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/Command/FindImpl.php',
        'FileMaker_Command_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/CommandImpl.php',
        'FileMaker_Command_PerformScript' => __DIR__ . '/../..' . '/src/lib/FileMaker/Command/PerformScript.php',
        'FileMaker_Command_PerformScript_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/Command/PerformScriptImpl.php',
        'FileMaker_Error' => __DIR__ . '/../..' . '/src/lib/FileMaker/Error.php',
        'FileMaker_Error_Validation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Error/Validation.php',
        'FileMaker_Field' => __DIR__ . '/../..' . '/src/lib/FileMaker/Field.php',
        'FileMaker_Field_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/FieldImpl.php',
        'FileMaker_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/FileMakerImpl.php',
        'FileMaker_Layout' => __DIR__ . '/../..' . '/src/lib/FileMaker/Layout.php',
        'FileMaker_Layout_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/LayoutImpl.php',
        'FileMaker_Parser_FMPXMLLAYOUT' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/Parser/FMPXMLLAYOUT.php',
        'FileMaker_Parser_FMResultSet' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/Parser/FMResultSet.php',
        'FileMaker_Record' => __DIR__ . '/../..' . '/src/lib/FileMaker/Record.php',
        'FileMaker_Record_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/RecordImpl.php',
        'FileMaker_RelatedSet' => __DIR__ . '/../..' . '/src/lib/FileMaker/RelatedSet.php',
        'FileMaker_RelatedSet_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/RelatedSetImpl.php',
        'FileMaker_Result' => __DIR__ . '/../..' . '/src/lib/FileMaker/Result.php',
        'FileMaker_Result_Implementation' => __DIR__ . '/../..' . '/src/lib/FileMaker/Implementation/ResultImpl.php',
        'PEAR' => __DIR__ . '/../..' . '/src/lib/FileMaker/PEAR.php',
        'PEAR_Error' => __DIR__ . '/../..' . '/src/lib/FileMaker/PEAR.php',
        'availability\\apiClass' => __DIR__ . '/../..' . '/availability/api.php',
        'bookings\\apiClass' => __DIR__ . '/../..' . '/bookings/api.php',
        'contact\\apiClass' => __DIR__ . '/../..' . '/contact/api.php',
        'media\\apiClass' => __DIR__ . '/../..' . '/media/api.php',
        'src\\authenticate\\authorize' => __DIR__ . '/../..' . '/src/authenticate/authorize.php',
        'src\\config\\connection\\dbconnection' => __DIR__ . '/../..' . '/src/config/connection/conn.php',
        'src\\config\\duplicate' => __DIR__ . '/../..' . '/src/config/duplicate.php',
        'src\\config\\jwt' => __DIR__ . '/../..' . '/src/config/jwt.php',
        'src\\config\\responses\\availabilityResponses' => __DIR__ . '/../..' . '/src/config/responses/availabilityResponseFormat.php',
        'src\\config\\responses\\contactResponses' => __DIR__ . '/../..' . '/src/config/responses/contactResponseFormat.php',
        'src\\config\\responses\\mediaResponses' => __DIR__ . '/../..' . '/src/config/responses/mediaResponseFormat.php',
        'src\\config\\responses\\userResponses' => __DIR__ . '/../..' . '/src/config/responses/responseFormat.php',
        'src\\validations\\availability\\validate' => __DIR__ . '/../..' . '/src/validations/availability.php',
        'src\\validations\\contact\\validate' => __DIR__ . '/../..' . '/src/validations/contact.php',
        'src\\validations\\validateFields' => __DIR__ . '/../..' . '/src/validations/userValidate.php',
        'users\\apiClass' => __DIR__ . '/../..' . '/users/api.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit584576283f1a81410a7671c98177eec6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit584576283f1a81410a7671c98177eec6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit584576283f1a81410a7671c98177eec6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit584576283f1a81410a7671c98177eec6::$classMap;

        }, null, ClassLoader::class);
    }
}