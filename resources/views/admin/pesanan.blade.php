@extends('layouts.bakery-admin')

@section('title', 'Pesanan Masuk')
@section('topbar_title', 'Pesanan Masuk')

@push('styles')
<style>
    .table-card {
        background-color: #FFFFFF;
        border-radius: 16px;
        padding: 1.75rem;
        box-shadow: 0 3px 14px rgba(0, 0, 0, 0.025);
        border: 1px solid #F0F2F5;
    }

    .table-pesanan thead th {
        background-color: #F8F9FA;
        color: #495057;
        font-size: 0.82rem;
        font-weight: 700;
        border-bottom: none;
        padding: 0.9rem 1rem;
    }

    .table-pesanan tbody td {
        padding: 1.1rem 1rem;
        font-size: 0.88rem;
        vertical-align: middle;
        border-bottom: 1px solid #F1F3F5;
    }

    .badge-status {
        padding: 0.4rem 1rem;
        border-radius: 50px;
        font-size: 0.76rem;
        font-weight: 700;
        display: inline-block;
        min-width: 92px;
        text-align: center;
    }

    .status-menunggu { background-color: #FEF3C7; color: #B45309; }
    .status-diproses { background-color: #DCFCE7; color: #15803D; }
    .status-dikirim  { background-color: #10B981; color: #FFFFFF; }
    .status-selesai  { background-color: #06B6D4; color: #FFFFFF; }

    .btn-detail {
        background-color: #FFFFFF;
        border: 1px solid #DEE2E6;
        color: #1E2530;
        border-radius: 8px;
        font-size: 0.8rem;
        font-weight: 600;
        padding: 0.35rem 1.1rem;
        transition: all 0.2s;
    }

    .btn-detail:hover {
        background-color: #F8F9FA;
        border-color: #ADB5BD;
    }
</style>
@endpush

@section('content')
    <div class="mb-4">
        <h2 class="h4 fw-bold mb-1">Daftar Pesanan</h2>
        <p class="text-muted small mb-0">Periksa pesanan dan perbarui status pengerjaan.</p>
    </div>

    <div class="table-card">
        <div class="table-responsive">
            <table class="table table-pesanan mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pelanggan</th>
                        <th>Menu</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftarPesanan as $p)
                    @php
                        $statusClass = match($p['status']) {
                            'Menunggu' => 'status-menunggu',
                            'Diproses' => 'status-diproses',
                            'Dikirim'  => 'status-dikirim',
                            'Selesai'  => 'status-selesai',
                            default    => 'status-menunggu',
                        };
                    @endphp
                    <tr id="row-pesanan-{{ $p['no'] }}">
                        <td class="text-muted">{{ $p['no'] }}</td>
                        <td class="fw-bold">{{ $p['pelanggan'] }}</td>
                        <td>{{ $p['menu'] }}</td>
                        <td class="text-muted">{{ $p['tanggal'] }}</td>
                        <td class="fw-semibold">{{ $p['total'] }}</td>
                        <td>
                            <span class="badge-status {{ $statusClass }}" id="badge-{{ $p['no'] }}">
                                {{ $p['status'] }}
                            </span>
                        </td>
                        <td>
                            <button type="button"
                                    class="btn btn-detail"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalDetailPesanan"
                                    data-no="{{ $p['no'] }}"
                                    data-pelanggan="{{ $p['pelanggan'] }}"
                                    data-menu="{{ $p['menu'] }}"
                                    data-tanggal="{{ $p['tanggal'] }}"
                                    data-total="{{ $p['total'] }}"
                                    data-status="{{ $p['status'] }}"
                                    data-catatan="{{ $p['catatan'] }}">
                                Detail
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Detail & Ubah Status Pesanan -->
    <div class="modal fade" id="modalDetailPesanan" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold">Detail Pesanan #<span id="detailNo"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="bg-light rounded-3 p-3 mb-3 small">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-muted">Pelanggan:</span>
                            <span class="fw-bold" id="detailPelanggan"></span>
                        </div>
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-muted">Menu Dipesan:</span>
                            <span class="fw-semibold" id="detailMenu"></span>
                        </div>
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-muted">Tanggal Order:</span>
                            <span id="detailTanggal"></span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Total Bayar:</span>
                            <span class="fw-bold text-danger" id="detailTotal"></span>
                        </div>
                        <div class="border-top pt-2 text-muted">
                            <strong>Catatan:</strong> <span id="detailCatatan"></span>
                        </div>
                    </div>

                    <label class="form-label small fw-bold">Perbarui Status Pengerjaan</label>
                    <select id="selectStatusBaru" class="form-select">
                        <option value="Menunggu">Menunggu</option>
                        <option value="Diproses">Diproses</option>
                        <option value="Dikirim">Dikirim</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn text-white fw-semibold" style="background-color: #D92648;" id="btnSimpanStatus">
                        Simpan Status
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    let currentNo = null;

    document.getElementById('modalDetailPesanan').addEventListener('show.bs.modal', function (event) {
        const btn = event.relatedTarget;
        currentNo = btn.getAttribute('data-no');

        document.getElementById('detailNo').innerText = currentNo;
        document.getElementById('detailPelanggan').innerText = btn.getAttribute('data-pelanggan');
        document.getElementById('detailMenu').innerText = btn.getAttribute('data-menu');
        document.getElementById('detailTanggal').innerText = btn.getAttribute('data-tanggal');
        document.getElementById('detailTotal').innerText = btn.getAttribute('data-total');
        document.getElementById('detailCatatan').innerText = btn.getAttribute('data-catatan');

        const badge = document.getElementById('badge-' + currentNo);
        document.getElementById('selectStatusBaru').value = badge.innerText.trim();
    });

    document.getElementById('btnSimpanStatus').addEventListener('click', function () {
        const statusBaru = document.getElementById('selectStatusBaru').value;
        const badge = document.getElementById('badge-' + currentNo);

        badge.innerText = statusBaru;
        badge.className = 'badge-status';

        if (statusBaru === 'Menunggu') badge.classList.add('status-menunggu');
        else if (statusBaru === 'Diproses') badge.classList.add('status-diproses');
        else if (statusBaru === 'Dikirim') badge.classList.add('status-dikirim');
        else if (statusBaru === 'Selesai') badge.classList.add('status-selesai');

        bootstrap.Modal.getInstance(document.getElementById('modalDetailPesanan')).hide();
    });
</script>
@endpush
