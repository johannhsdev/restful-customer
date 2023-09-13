<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Resources\V1\CustomerResource;
use App\Models\Customer;
use App\Models\Region;
use App\Models\Commune;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CustomerResource::collection(Customer::where('status', 'A')->latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {

        // Validar la solicitud
        $validatedData = $request->validated();

        // Obtener la instancia de la comuna y la región
        $commune = Commune::where('id', $validatedData['id_com'])->first();
        $region = Region::where('id', $validatedData['id_reg'])->first();


        // Verificar si la comuna y la región existen
        if (!$commune || !$region) {
            return response()->json([
                'status' => false,
                'message' => 'La comuna y/o la región especificadas no existen.'
            ], 400);
        }

        // Verificar si la comuna está asociada a la región
        if ($commune->region->id !== $region->id) {
            return response()->json([
                'status' => false,
                'message' => 'La comuna y la región no están relacionadas.'
            ], 400);
        }

        // Crear el cliente
        Customer::create([
            'dni' => $validatedData['dni'],
            'id_reg' => $validatedData['id_reg'],
            'id_com' => $validatedData['id_com'],
            'email' => $validatedData['email'],
            'name' => $validatedData['name'],
            'last_name' => $validatedData['last_name'],
            'address' => $validatedData['address'],
            'date_reg' => $validatedData['date_reg'],
            'status' => "A" //Estatus por defecto
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Cliente Registrado satisfactoriamente'
        ], 200);


    }

    /**
     * Display the specified resource.
     */
    public function show($dni)
    {
        // Buscar el cliente por dni o email
        $customer = Customer::where('dni', $dni)->orWhere('email', $dni)->first();

        // Verificar si el cliente existe y no está en estado 'trash'
        if (!$customer || $customer->status === 'trash') {
            return response()->json([
                'status' => false,
                'message' => 'Cliente inexistente.'
            ], 404);
        }

        // Verificar el estado del cliente
        if ($customer->status === 'I') {
            return response()->json([
                'status' => false,
                'message' => 'Cliente inactivo.'
            ], 400);
        }

        // Devolver el cliente
        return new CustomerResource($customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($dni)
    {
        // Buscar el cliente
        $customer = Customer::find($dni);

        // Verificar si el cliente existe y no está en estado 'trash'
        if (!$customer || $customer->status === 'trash') {
            return response()->json([
                'status' => false,
                'message' => 'Registro no existe.'
            ], 404);
        }

        // Cambiar el estado del cliente a 'trash'
        $customer->status = 'trash';
        $customer->save();

        return response()->json([
            'status' => true,
            'message' => 'Cliente eliminado satisfactoriamente'
        ], 200);
    }
}
