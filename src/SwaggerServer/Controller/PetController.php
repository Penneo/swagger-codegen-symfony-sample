<?php

/**
 * PetController
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Controller
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

namespace Swagger\Server\Controller;

use \Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Swagger\Server\Api\PetApiInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Swagger\Server\Model\Pet;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Swagger\Server\Model\ApiResponse;
use string[];
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * PetController Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Server\Controller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PetController extends Controller
{

    /**
     * Operation addPet
     *
     * Add a new pet to the store
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function addPetAction(Request $request)
    {
        // Authentication 'petstore_auth' required
        // Oauth required
        $securitypetstore_auth = $request->headers->get('authorization');
        // Handle body params
        $body = $this->deserialize($request->getContent(), 'Swagger\Server\Model\Pet', 'json');

        // Parse incoming parameters
        // Verify the required parameter 'body' is set
        if ($body === null) {
            return $this->createBadRequestResponse('Missing the required parameter $body when calling addPet');
        }

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'petstore_auth'
            $handler->setpetstore_auth($securitypetstore_auth);
            // No return type expected; return empty response
            $handler->addPet($body);
            return new Response('', 204);
        } catch (MethodNotAllowedHttpException $exception) {
            // Invalid input
            return $this->createErrorResponse($exception);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation deletePet
     *
     * Deletes a pet
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function deletePetAction(Request $request)
    {
        // Authentication 'petstore_auth' required
        // Oauth required
        $securitypetstore_auth = $request->headers->get('authorization');
        // Handle header params
        $api_key = $this->fromHeader($request->headers->get('api_key'), 'string');
        // Handle path params
        $pet_id = $this->fromPath($request->attributes->get('pet_id'), 'int');

        // Parse incoming parameters
        // Verify the required parameter 'pet_id' is set
        if ($pet_id === null) {
            return $this->createBadRequestResponse('Missing the required parameter $pet_id when calling deletePet');
        }

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'petstore_auth'
            $handler->setpetstore_auth($securitypetstore_auth);
            // No return type expected; return empty response
            $handler->deletePet($pet_id, $api_key);
            return new Response('', 204);
        } catch (BadRequestHttpException $exception) {
            // Invalid pet value
            return $this->createErrorResponse($exception);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation findPetsByStatus
     *
     * Finds Pets by status
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function findPetsByStatusAction(Request $request)
    {
        // Authentication 'petstore_auth' required
        // Oauth required
        $securitypetstore_auth = $request->headers->get('authorization');
        // Handle query params
        $status = $this->fromQuery($request->query->get('status'), 'string[]');

        // Parse incoming parameters
        // Verify the required parameter 'status' is set
        if ($status === null) {
            return $this->createBadRequestResponse('Missing the required parameter $status when calling findPetsByStatus');
        }

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'petstore_auth'
            $handler->setpetstore_auth($securitypetstore_auth);
            // Expecting a return value (exception otherwise)
            $result = $handler->findPetsByStatus($status);

            // Handle 200 response: successful operation
            $content = $this->serialize($result, 'json');
            return new Response($content, 200, [
                'Content-Type' => 'application/json',
                'X-Swagger-Message' => 'successful operation',
            ]);
        } catch (BadRequestHttpException $exception) {
            // Invalid status value
            return $this->createErrorResponse($exception);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation findPetsByTags
     *
     * Finds Pets by tags
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function findPetsByTagsAction(Request $request)
    {
        // Authentication 'petstore_auth' required
        // Oauth required
        $securitypetstore_auth = $request->headers->get('authorization');
        // Handle query params
        $tags = $this->fromQuery($request->query->get('tags'), 'string[]');

        // Parse incoming parameters
        // Verify the required parameter 'tags' is set
        if ($tags === null) {
            return $this->createBadRequestResponse('Missing the required parameter $tags when calling findPetsByTags');
        }

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'petstore_auth'
            $handler->setpetstore_auth($securitypetstore_auth);
            // Expecting a return value (exception otherwise)
            $result = $handler->findPetsByTags($tags);

            // Handle 200 response: successful operation
            $content = $this->serialize($result, 'json');
            return new Response($content, 200, [
                'Content-Type' => 'application/json',
                'X-Swagger-Message' => 'successful operation',
            ]);
        } catch (BadRequestHttpException $exception) {
            // Invalid tag value
            return $this->createErrorResponse($exception);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation getPetById
     *
     * Find pet by ID
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function getPetByIdAction(Request $request)
    {
        // Authentication 'api_key' required
        // Set key with prefix in header
        $securityapi_key = $request->headers->get('api_key');
        // Handle path params
        $pet_id = $this->fromPath($request->attributes->get('pet_id'), 'int');

        // Parse incoming parameters
        // Verify the required parameter 'pet_id' is set
        if ($pet_id === null) {
            return $this->createBadRequestResponse('Missing the required parameter $pet_id when calling getPetById');
        }

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'api_key'
            $handler->setapi_key($securityapi_key);
            // Expecting a return value (exception otherwise)
            $result = $handler->getPetById($pet_id);

            // Handle 200 response: successful operation
            $content = $this->serialize($result, 'json');
            return new Response($content, 200, [
                'Content-Type' => 'application/json',
                'X-Swagger-Message' => 'successful operation',
            ]);
        } catch (BadRequestHttpException $exception) {
            // Invalid ID supplied
            return $this->createErrorResponse($exception);
        } catch (NotFoundHttpException $exception) {
            // Pet not found
            return $this->createErrorResponse($exception);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation updatePet
     *
     * Update an existing pet
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function updatePetAction(Request $request)
    {
        // Authentication 'petstore_auth' required
        // Oauth required
        $securitypetstore_auth = $request->headers->get('authorization');
        // Handle body params
        $body = $this->deserialize($request->getContent(), 'Swagger\Server\Model\Pet', 'json');

        // Parse incoming parameters
        // Verify the required parameter 'body' is set
        if ($body === null) {
            return $this->createBadRequestResponse('Missing the required parameter $body when calling updatePet');
        }

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'petstore_auth'
            $handler->setpetstore_auth($securitypetstore_auth);
            // No return type expected; return empty response
            $handler->updatePet($body);
            return new Response('', 204);
        } catch (BadRequestHttpException $exception) {
            // Invalid ID supplied
            return $this->createErrorResponse($exception);
        } catch (NotFoundHttpException $exception) {
            // Pet not found
            return $this->createErrorResponse($exception);
        } catch (MethodNotAllowedHttpException $exception) {
            // Validation exception
            return $this->createErrorResponse($exception);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation updatePetWithForm
     *
     * Updates a pet in the store with form data
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function updatePetWithFormAction(Request $request)
    {
        // Authentication 'petstore_auth' required
        // Oauth required
        $securitypetstore_auth = $request->headers->get('authorization');
        // Handle path params
        $pet_id = $this->fromPath($request->attributes->get('pet_id'), 'int');
        // Handle form params
        $name = $this->fromForm($request->request->get('name'), 'string');
        // Handle form params
        $status = $this->fromForm($request->request->get('status'), 'string');

        // Parse incoming parameters
        // Verify the required parameter 'pet_id' is set
        if ($pet_id === null) {
            return $this->createBadRequestResponse('Missing the required parameter $pet_id when calling updatePetWithForm');
        }

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'petstore_auth'
            $handler->setpetstore_auth($securitypetstore_auth);
            // No return type expected; return empty response
            $handler->updatePetWithForm($pet_id, $name, $status);
            return new Response('', 204);
        } catch (MethodNotAllowedHttpException $exception) {
            // Invalid input
            return $this->createErrorResponse($exception);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation uploadFile
     *
     * uploads an image
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function uploadFileAction(Request $request)
    {
        // Authentication 'petstore_auth' required
        // Oauth required
        $securitypetstore_auth = $request->headers->get('authorization');
        // Handle path params
        $pet_id = $this->fromPath($request->attributes->get('pet_id'), 'int');
        // Handle form params
        $additional_metadata = $this->fromForm($request->request->get('additional_metadata'), 'string');
        // Handle file params
        $file = $request->files->get('file');

        // Parse incoming parameters
        // Verify the required parameter 'pet_id' is set
        if ($pet_id === null) {
            return $this->createBadRequestResponse('Missing the required parameter $pet_id when calling uploadFile');
        }

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'petstore_auth'
            $handler->setpetstore_auth($securitypetstore_auth);
            // Expecting a return value (exception otherwise)
            $result = $handler->uploadFile($pet_id, $additional_metadata, $file);

            // Handle 200 response: successful operation
            $content = $this->serialize($result, 'json');
            return new Response($content, 200, [
                'Content-Type' => 'application/json',
                'X-Swagger-Message' => 'successful operation',
            ]);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Returns the handler for this API controller.
     * @return PetApiInterface
     */
    public function getApiHandler()
    {
        return $this->get('swagger_server.api.api_server')->getApiHandler('pet');
    }
}
