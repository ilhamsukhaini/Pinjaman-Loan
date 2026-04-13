<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function getResponse(Request $request)
    {
        $userMessage = strtolower(trim($request->input('message')));

        // Get chatbot response based on user input
        $response = $this->findResponse($userMessage);

        return response()->json([
            'success' => true,
            'response' => $response,
            'timestamp' => now()
        ]);
    }

    private function findResponse($message)
    {
        // FAQ Database (rule-based)
        $faqs = [
            // Greeting
            'hi' => 'Assalamualaikum! 👋 Selamat datang ke KoperasiLoan. Bagaimana aku boleh membantu anda hari ini?',
            'hello' => 'Assalamualaikum! 👋 Selamat datang ke KoperasiLoan. Bagaimana aku boleh membantu anda hari ini?',
            'hai' => 'Assalamualaikum! 👋 Selamat datang ke KoperasiLoan. Bagaimana aku boleh membantu anda hari ini?',
            'halo' => 'Assalamualaikum! 👋 Selamat datang ke KoperasiLoan. Bagaimana aku boleh membantu anda hari ini?',

            // Interest Rate
            'kadar bunga' => 'Kadar bunga kami adalah 2% - 5% per annum, bergantung pada jenis pinjaman dan profil peminjam. Kadar kami adalah yang paling kompetitif di industri koperasi. 📊',
            'bunga' => 'Kadar bunga kami adalah 2% - 5% per annum, bergantung pada jenis pinjaman dan profil peminjam. Kadar kami adalah yang paling kompetitif di industri koperasi. 📊',
            'interest' => 'Kadar bunga kami adalah 2% - 5% per annum, bergantung pada jenis pinjaman dan profil peminjam. Kadar kami adalah yang paling kompetitif di industri koperasi. 📊',

            // Processing Time
            'berapa lama' => 'Proses permohonan pinjaman kami biasanya 3-5 hari kerja setelah semua dokumen lengkap. Kami akan menghubungi anda melalui WhatsApp atau telefon. ⏱️',
            'proses' => 'Proses permohonan pinjaman kami biasanya 3-5 hari kerja setelah semua dokumen lengkap. Kami akan menghubungi anda melalui WhatsApp atau telefon. ⏱️',
            'lama' => 'Proses permohonan pinjaman kami biasanya 3-5 hari kerja setelah semua dokumen lengkap. Kami akan menghubungi anda melalui WhatsApp atau telefon. ⏱️',
            'approval' => 'Proses permohonan pinjaman kami biasanya 3-5 hari kerja setelah semua dokumen lengkap. Kami akan menghubungi anda melalui WhatsApp atau telefon. ⏱️',

            // Loan Amount
            'amaun' => 'Kami menawarkan pinjaman dari RM 1,000 hingga RM 100,000. Amaun yang anda boleh minjam bergantung pada pendapatan dan kelayakan anda. 💰',
            'berapa banyak' => 'Kami menawarkan pinjaman dari RM 1,000 hingga RM 100,000. Amaun yang anda boleh minjam bergantung pada pendapatan dan kelayakan anda. 💰',
            'maximum' => 'Amaun pinjaman maksimum kami ialah RM 100,000. Untuk amaun yang lebih besar, sila hubungi pejabat kami. 💰',

            // Requirement
            'keperluan' => 'Dokumen yang diperlukan: Salinan Kad Pengenalan, Slip Gaji (2 bulan terbaru), dan Penyatan Bank (3 bulan terbaru). 📄',
            'dokumen' => 'Dokumen yang diperlukan: Salinan Kad Pengenalan, Slip Gaji (2 bulan terbaru), dan Penyatan Bank (3 bulan terbaru). 📄',
            'syarat' => 'Syarat kelayakan: Umur 21-65 tahun, pendapatan minimum RM 1,500/bulan, kerja tetap/bekerja sendiri, dan anggota koperasi berdaftar. ✓',
            'syarat kelayakan' => 'Syarat kelayakan: Umur 21-65 tahun, pendapatan minimum RM 1,500/bulan, kerja tetap/bekerja sendiri, dan anggota koperasi berdaftar. ✓',

            // Early payment
            'bayar awal' => 'Ya, anda dibenarkan untuk melunaskan pinjaman lebih awal tanpa penalti atau denda tambahan. Ini adalah salah satu keuntungan kami! ✅',
            'early payment' => 'Ya, anda dibenarkan untuk melunaskan pinjaman lebih awal tanpa penalti atau denda tambahan. Ini adalah salah satu keuntungan kami! ✅',
            'early' => 'Ya, anda dibenarkan untuk melunaskan pinjaman lebih awal tanpa penalti atau denda tambahan. Ini adalah salah satu keuntungan kami! ✅',

            // Contact
            'hubungi' => 'Anda boleh menghubungi kami di: Tel: 03-2000 5555 | Email: pinjaman@koperasi.com.my | WhatsApp: Klik tombol di bawah 📞',
            'contact' => 'Anda boleh menghubungi kami di: Tel: 03-2000 5555 | Email: pinjaman@koperasi.com.my | WhatsApp: Klik tombol di bawah 📞',
            'alamat' => 'Bangunan Koperasi, Jalan Merdeka 123, Kuala Lumpur 50000 📍',
        ];

        // Check for keyword matches
        foreach ($faqs as $keyword => $answer) {
            if (strpos($message, $keyword) !== false) {
                return $answer;
            }
        }

        // Default response
        return 'Maaf, aku tidak memahami pertanyaan anda. Boleh anda tanyakan mengenai kadar bunga, dokumen yang diperlukan, atau proses permohonan? 🤔';
    }
}