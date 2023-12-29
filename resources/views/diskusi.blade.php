@extends('layouts.main')

@section('container')
    <div class="container">
        <h1>Forum Diskusi</h1>

        <hr>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahPertanyaanModal">
            Tambahkan Diskusi Baru
        </button>

        <hr>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            @foreach($pertanyaan as $item)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $item->id }}">
                        
                        
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}" aria-expanded="false" aria-controls="collapse{{ $item->id }}">
                            <h5>{{ $item->judul }}</h5>
                         
                        </button>
                        
                    </h2>
                    <div id="collapse{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="card-title">{{ $item->pertanyaan }}</p>
                            <br>
                            <p> 
                                (<small>{{ $item->created_at->diffForHumans() }}</small>)
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal Tambah Pertanyaan -->
    <div class="modal fade" id="tambahPertanyaanModal" tabindex="-1" aria-labelledby="tambahPertanyaanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahPertanyaanModalLabel">Tambahkan Diskusi Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('diskusi.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul:</label>
                            <input type="text" class="form-control" name="judul" id="judul">
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan" class="form-label">Detail:</label>
                            <textarea class="form-control" name="pertanyaan" id="pertanyaan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Diskusi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
