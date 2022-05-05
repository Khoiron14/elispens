<div class="container">
    <nav class="navbar navbar-light bg-transparent py-xl-5">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo2.png') }}" alt="elispens" height="34">
        </a>
    
        <div>
            @if (auth()->check())
            <a class="my-custom-btn" href="{{ route('dashboard') }}">Dashboard</a>
            @else
            <a class="my-custom-btn" href="{{ route('login') }}">Masuk</a>
            <a class="my-custom-btn" href="" data-toggle="modal" data-target="#registerModal">Daftar</a>
    
            {{-- register modal --}}
            <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerModalLabel">Daftar Sebagai</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <a href="{{ route('register.create', 'lecturer') }}" class="btn btn-primary btn-block">
                                <i class="material-icons-outlined align-middle">co_present</i><strong class="align-bottom">&nbsp;Dosen</strong>
                            </a>
                            <a href="{{ route('register.create', 'student') }}" class="btn btn-primary btn-block">
                                <i class="material-icons-outlined align-middle">school</i><strong class="align-bottom">&nbsp;Mahasiswa</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </nav>
</div>