<?php 

namespace App\Traits;

trait ApiResponser
{
	private function successResponse($data, $code)
	{
		return response()->json($data, $code);
	}

	protected function errorResponse($message, $code)
	{
		return redirect()->back(); //redirige a la pagina anterior o a la raíz cuando no existe al ruta
		//return response()->json(['error' => $message, 'code' => $code], $code);
		
	}

	protected function showAll(Collection $collection, $code = 200)
	{
		return $this->successResponse(['data' => $collection], $code);
	}

	protected function showOne(Model $instance, $code = 200)
	{
		return $this->successResponse(['data' => $instance], $code);
	}
}