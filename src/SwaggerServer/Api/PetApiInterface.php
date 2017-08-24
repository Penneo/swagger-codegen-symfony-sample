<?php
/**
 * PetApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore
 *
 * This is a sample server Petstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).  For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Api;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Swagger\Server\Model\Pet;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Swagger\Server\Model\ApiResponse;
use string[];
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * PetApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  Swagger\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
interface PetApiInterface
{

    /**
     * Sets authentication method petstore_auth
     *
     * @param string $value Value of the petstore_auth authentication method.
     *
     * @return void
     */
    public function setpetstore_auth($value);

    /**
     * Sets authentication method api_key
     *
     * @param string $value Value of the api_key authentication method.
     *
     * @return void
     */
    public function setapi_key($value);

    /**
     * Operation addPet
     *
     * Add a new pet to the store
     *
     * @param  Pet $body  Pet object that needs to be added to the store (required)
     *
     * @throws MethodNotAllowedHttpException  Invalid input
     */
    public function addPet(Pet $body);

    /**
     * Operation deletePet
     *
     * Deletes a pet
     *
     * @param  int $pet_id  Pet id to delete (required)
     * @param  string $api_key   (optional)
     *
     * @throws BadRequestHttpException  Invalid pet value
     */
    public function deletePet($pet_id, $api_key = null);

    /**
     * Operation findPetsByStatus
     *
     * Finds Pets by status
     *
     * @param  string[] $status  Status values that need to be considered for filter (required)
     *
     * @return Pet[]  successful operation
     *
     * @throws BadRequestHttpException  Invalid status value
     */
    public function findPetsByStatus(string[] $status);

    /**
     * Operation findPetsByTags
     *
     * Finds Pets by tags
     *
     * @param  string[] $tags  Tags to filter by (required)
     *
     * @return Pet[]  successful operation
     *
     * @throws BadRequestHttpException  Invalid tag value
     */
    public function findPetsByTags(string[] $tags);

    /**
     * Operation getPetById
     *
     * Find pet by ID
     *
     * @param  int $pet_id  ID of pet to return (required)
     *
     * @return Pet  successful operation
     *
     * @throws BadRequestHttpException  Invalid ID supplied
     * @throws NotFoundHttpException  Pet not found
     */
    public function getPetById($pet_id);

    /**
     * Operation updatePet
     *
     * Update an existing pet
     *
     * @param  Pet $body  Pet object that needs to be added to the store (required)
     *
     * @throws BadRequestHttpException  Invalid ID supplied
     * @throws NotFoundHttpException  Pet not found
     * @throws MethodNotAllowedHttpException  Validation exception
     */
    public function updatePet(Pet $body);

    /**
     * Operation updatePetWithForm
     *
     * Updates a pet in the store with form data
     *
     * @param  int $pet_id  ID of pet that needs to be updated (required)
     * @param  string $name  Updated name of the pet (optional)
     * @param  string $status  Updated status of the pet (optional)
     *
     * @throws MethodNotAllowedHttpException  Invalid input
     */
    public function updatePetWithForm($pet_id, $name = null, $status = null);

    /**
     * Operation uploadFile
     *
     * uploads an image
     *
     * @param  int $pet_id  ID of pet to update (required)
     * @param  string $additional_metadata  Additional data to pass to server (optional)
     * @param  SplFileObject $file  file to upload (optional)
     *
     * @return ApiResponse  successful operation
     *
     */
    public function uploadFile($pet_id, $additional_metadata = null, $file = null);
}