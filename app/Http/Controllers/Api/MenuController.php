<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::with('menuItems')->get();
        return response()->json($menus);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function generateQRCode(Menu $menu)
    {
        // Zorg ervoor dat deze route verwijst naar de publieke pagina voor het tonen van het menu
        $url = route('menu.show', $menu);
        $url = str_replace('/api', '', $url); // Verwijder '/api' uit de URL
        // Genereer de QR-code
        return QrCode::size(300)->generate($url);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
