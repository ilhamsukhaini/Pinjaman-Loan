<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function submitApplication(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'ic' => 'required|string|max:20',
            'telefon' => 'required|string|max:20',
            'email' => 'required|email',
            'jawatan' => 'required|string|max:255',
            'employment_type' => 'required|in:kerajaan,kontrak,swasta',
            'tempoh_berkhidmat' => 'required|string|max:100'
        ]);

        // Format message untuk WhatsApp
        $message = $this->formatWhatsAppMessage($validated);

        // Get WhatsApp number (your cooperative's number)
        $whatsappNumber = '60193108581'; // Ganti dengan number koperasi (format: countrycode + number, no + or -)

        // Create WhatsApp URL
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($message);

        // Return response dengan WhatsApp URL
        return response()->json([
            'success' => true,
            'whatsapp_url' => $whatsappUrl,
            'message' => 'Permohonan berjaya! Anda akan dialihkan ke WhatsApp.'
        ]);
    }

    private function formatWhatsAppMessage($data)
    {
        $employmentTypeMap = [
            'kerajaan' => 'Kerajaan (tetap)',
            'kontrak' => 'Kerajaan (Kontrak)',
            'swasta' => 'Swasta'
        ];

        $message = "*PERMOHONAN PINJAMAN KOPERASI*\n\n";
        $message .= "*Butiran Pemohon:*\n";
        $message .= "Nama: {$data['nama']}\n";
        $message .= "No. IC: {$data['ic']}\n";
        $message .= "No. Telefon: {$data['telefon']}\n";
        $message .= "Email: {$data['email']}\n\n";
        $message .= "*Butiran Pekerjaan:*\n";
        $message .= "Jawatan: {$data['jawatan']}\n";
        $message .= "Jenis Pekerjaan: {$employmentTypeMap[$data['employment_type']]}\n";
        $message .= "Tempoh Berkhidmat: {$data['tempoh_berkhidmat']}\n\n";
        $message .= "INFO : Kelayakan adalah mengikut gaji terkini\n\n";
        $message .= "Terima kasih! Kami akan hubungi anda dalam 1-2 hari kerja.";

        return $message;
    }
}