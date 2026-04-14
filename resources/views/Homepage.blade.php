<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjaman Koperasi - Solusi Kewangan Terpercaya</title>
    <link rel="stylesheet" href="{{ asset('css/desktop.css') }}">
    <link rel="stylesheet" href="{{ asset('css/phone.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tablet.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="logo">💰Pinjaman Koperasi </div>
        <ul class="nav-links">
            <li><a href="#features">Keistimewaan</a></li>
            <li><a href="#syarat">Syarat</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#contact">Hubungi</a></li>
        </ul>
    </nav>
    
    <!-- Hero Section -->
    <section class="hero">
        <h1>Pinjaman Mudah & Dipercayai</h1>
        <p>Dapatkan pinjaman dengan proses yang cepat. Kami memahami keperluan finansial anda.</p>
        <button class="cta-button" onclick="document.querySelector('.form-section').scrollIntoView({behavior: 'smooth'})">Mohon Pinjaman Sekarang</button>
    </section>
    
    <!-- Features Section -->
    <section class="features features fade-in" id="features">
        <div class="feature-card">
            <h3>✓ Proses Cepat</h3>
            <p>Permohonan diproses dalam 3-5 hari kerja dengan dokumentasi yang mudah.</p>
        </div>
        <div class="feature-card">
            <h3>✓ Fleksibel</h3>
            <p>Tempoh bayaran balik boleh disesuaikan mengikut kemampuan anda.</p>
        </div>
        <div class="feature-card">
            <h3>✓ Selamat</h3>
            <p>Data anda dilindungi dengan standar keselamatan kelas dunia.</p>
        </div>
    </section>
    
    <!-- Info Section -->
    <section class="info-section info-section fade-in" id="syarat">
        <div class="info-container">
            <h2>Maklumat Pinjaman</h2>
            <div class="info-grid">
                <div class="info-item">
                    <h4>Amaun Pinjaman</h4>
                    <p><strong>RM 5,000 - RM 400,000</strong><br>Bergantung pada kelayakan peminjam</p>
                </div>
                <div class="info-item">
                    <h4>Tempoh Bayaran</h4>
                    <p><strong>2 tahun - 13 tahun mengikut umur</strong><br>Bayaran bulanan yang mudah</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Terms Section -->
    <section class="terms-section terms-section fade-in">
        <h2>Syarat & Kelayakan</h2>
        <div class="terms-grid">
            <div class="term-item">
                <strong>Umur:</strong> 21 - 55 tahun
            </div>
            <div class="term-item">
                <strong>Pendapatan:</strong> Minimum RM 1,500/bulan
            </div>
            <div class="term-item">
                <strong>Dokumen:</strong> Salinan IC, Slip Gaji (3 bulan)
            </div>
            <div class="term-item">
                <strong>Kelayakan:</strong> Mengikut gaji terkini
            </div>
            <div class="term-item" id="term-item-full">
                <strong>Jenis Pekerjaan:</strong> Kerja tetap/kontrak untuk <strong style="color: rgb(114, 100, 100)">kakitangan kerajaan.</strong> Basic RM 2,500 ke atas untuk <strong style="color: rgb(114, 100, 100)">swasta dan GLC.</strong>
            </div>
        </div>
    </section>

    <!-- Credit History Info Section -->
    <section class="info-section info-section fade-in">
        <div class="info-container">
            <h2 class="section-title">Kelayakan Kredit Fleksibel</h2>
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">CCRIS Rekod <span style="color: #28a745;">✓</span></div>
                    <div class="info-description">Kami terima pemohon dengan sejarah CCRIS apapun</div>
                </div>
                <div class="info-item">
                    <div class="info-label">CTOS Status <span style="color: #28a745;">✓</span></div>
                    <div class="info-description">Status CTOS tidak menghalang permohonan anda</div>
                </div>
                <div class="info-item">
                    <div class="info-label">AKPK Registered <span style="color: #28a745;">✓</span></div>
                    <div class="info-description">Individu dalam AKPK boleh memohon pinjaman</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Blacklist Status <span style="color: #28a745;">✓</span></div>
                    <div class="info-description">Blacklist tidak menghalang anda dari memohon</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="faq-section faq-section fade-in" id="faq">
        <div class="faq-container">
            <h2>Soalan Lazim (FAQ)</h2>
            <div class="faq-item">
                <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                    Berapa lama proses permohonan?
                    <span class="toggle-icon">▼</span>
                </div>
                <div class="faq-answer">Biasanya 3-5 hari kerja selepas semua dokumen lengkap diserahkan. Pemohon akan dimaklumkan melalui telefon atau email.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                    Adakah ada yuran tersembunyi?
                    <span class="toggle-icon">▼</span>
                </div>
                <div class="faq-answer">Tidak. Semua caj telah dijelaskan sejelas-jelasnya dalam perjanjian pinjaman. Tiada yuran tersembunyi sama sekali.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                    Boleh saya bayar lebih awal?
                    <span class="toggle-icon">▼</span>
                </div>
                <div class="faq-answer">Ya, anda dibenarkan untuk melunaskan pinjaman lebih awal tanpa penalti atau denda tambahan.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                    Keperluan dokumen apa saja?
                    <span class="toggle-icon">▼</span>
                </div>
                <div class="faq-answer">Salinan IC, slip gaji terbaru (3 bulan)</div>
            </div>
        </div>
    </section>
    
    <!-- Application Form Section -->
    <section class="form-section">
        <div class="form-container">
            <h2>Borang Permohonan Pinjaman</h2>
            <form id="loanForm">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Penuh*</label>
                        <div class="input-icon">
                            <span>👤</span>
                            <input type="text" name="nama" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Jawatan*</label>
                        <input type="text" name="jawatan" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>No. Kad Pengenalan*</label>
                        <div class="input-icon">
                            <span>🪪</span>
                            <input type="text" name="ic" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Jenis Pekerjaan*</label>
                        <select name="employment_type" required>
                            <option value="">-- Pilih --</option>
                            <option value="kerajaan">Kerajaan (Tetap)</option>
                            <option value="kontrak">Kerajaan (Kontrak)</option>
                            <option value="swasta">Swasta</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>No. Telefon*</label>
                        <div class="input-icon">
                            <span>📞</span>
                            <input type="tel" name="telefon" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Tempoh Berkhidmat*</label>
                        <input type="text" name="tempoh_berkhidmat" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Email*</label>
                    <div class="input-icon">
                        <span>📧</span>
                        <input type="email" name="email" required>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Hantarkan ke WhatsApp</button>
                <br> <br>
                <div class="progress-container">
                    <div class="progress-bar"></div>
                    <div class="progress-text"></div>
                </div>
            </form> 
        </div>
    </section> 

    <a href="https://wa.me/60123485692" class="floating-wa">💬</a>
    
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Koperasi Pinjaman Malaysia. Semua hak terpelihara. | <a href="#">Dasar Privasi</a> | <a href="#">Syarat Penggunaan</a></p>
    </footer>
    
    <script>
        // Handle form submission
        document.getElementById('loanForm').addEventListener('submit', async function(event) {
        event.preventDefault();

        const submitBtn = this.querySelector('.submit-btn');
        const originalText = submitBtn.textContent;
        const loadingSpinner = document.getElementById('loadingSpinner');

        // Show loading spinner
        loadingSpinner.style.display = 'flex';
        submitBtn.disabled = true;

        const formData = new FormData(this);

        try {
            const response = await fetch('/submit-loan-application', {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            });

            const data = await response.json();

            // Hide loading spinner
            loadingSpinner.style.display = 'none';

            if (data.success) {
                submitBtn.textContent = '✅ Berjaya!';
                submitBtn.style.background = '#28a745';

                // ✅ DETECT DEVICE TYPE
                const isMobile = /iPhone|iPad|iPod|Android|webOS|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

                if (isMobile) {
                    // 📱 MOBILE - redirect dalam page
                    window.location.href = data.whatsapp_url;
                } else {
                    // 💻 DESKTOP - open new tab
                    window.open(data.whatsapp_url, '_blank');
                    
                    // Reset form
                    this.reset();

                    // Reset button
                    setTimeout(() => {
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                        submitBtn.style.background = '#2c5aa0';
                    }, 2000);
                }
            }
        } catch (error) {
            console.error('Error:', error);
            
            // Hide loading spinner
            loadingSpinner.style.display = 'none';
            
            submitBtn.textContent = '❌ Ada Ralat!';
            submitBtn.style.background = '#dc3545';

            setTimeout(() => {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                submitBtn.style.background = '#2c5aa0';
            }, 2000);
        }
    });

        // Fungsi delay untuk simulasi loading
        function delay(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        });

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

        // Progress bar logic
        const inputs = document.querySelectorAll('#loanForm input, #loanForm select');
        const progress = document.querySelector('.progress-bar');
        const progressText = document.querySelector('.progress-text');

        inputs.forEach(input => {
            input.addEventListener('input', () => {
                let filled = 0;

                inputs.forEach(i => {
                    if (i.value.trim() !== '') filled++;
                });

                let percent = Math.round((filled / inputs.length) * 100);

                progress.style.width = percent + '%';
                progressText.textContent = percent + '%';
            });
        });

        // Format telefon: 3 digit - 7 digit - 4 digit
        document.querySelector('input[name="telefon"]').addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');

            // ✅ limit max 11 digit (Malaysia max)
            value = value.substring(0, 11);

            // format
            if (value.startsWith('011')) {
                // format 011-xxxx-xxxx (11 digit)
                if (value.length > 3 && value.length <= 7) {
                    value = value.replace(/(\d{3})(\d+)/, '$1-$2');
                } else if (value.length > 7) {
                    value = value.replace(/(\d{3})(\d{4})(\d+)/, '$1-$2-$3');
                }
            } else {
                // format biasa 012-xxx-xxxx (10 digit)
                if (value.length > 3 && value.length <= 6) {
                    value = value.replace(/(\d{3})(\d+)/, '$1-$2');
                } else if (value.length > 6) {
                    value = value.replace(/(\d{3})(\d{3})(\d+)/, '$1-$2-$3');
                }
            }

            e.target.value = value;
        });

        // Format IC: 6 digit - 2 digit - 4 digit
        document.querySelector('input[name="ic"]').addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');

            // ✅ LIMIT 12 digit sahaja
            value = value.substring(0, 12);

            if (value.length > 6 && value.length <= 8) {
                value = value.replace(/(\d{6})(\d+)/, '$1-$2');
            } else if (value.length > 8) {
                value = value.replace(/(\d{6})(\d{2})(\d+)/, '$1-$2-$3');
            }

            e.target.value = value;
        });
    </script>
</body>
<div id="loadingSpinner" class="dot-overlay">
    <div class="dot-loader">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
</html>
