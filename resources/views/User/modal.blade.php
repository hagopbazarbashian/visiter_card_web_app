
@if (!$filteredCardforms->isEmpty())
<!-- Modal -->
<div class="modal fade" id="cardDetailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Card Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="wrapper tytyt">
                    <div class="flexx">
                        <a href="{{route('full_visiter_card', $filteredCardform->id)}}"><div class="bg-ico bg-icoo" id="facebook"><i class="fa fa-pencil   fa-3x"></i></div></a>
                        <p>Edit</p>
                    </div>
                    <div class="flexx">
                        <a href="#"><div class="bg-ico bg-icoo" id="pinterest"><i class="fa fa-paper-plane   fa-3x"></i></div></a>
                        <p>Send</p>
                    </div>
                    <div class="flexx">
                        <a href="#"><div class="bg-ico bg-icoo" id="twitter"><i class="fa fa-eye   fa-3x"></i></div></a>
                        <p>View</p>
                    </div>
                    <div class="flexx">
                        <a href="#"><div class="bg-ico bg-icoo" id="instagram"><i class="fa fa-qrcode   fa-3x"></i></div></a>
                        <p>Qr</p>
                    </div>
                    <div class="flexx">
                        <a href="#"><div class="bg-ico bg-icoo" id="tumblr"><i class="fa fa-trash   fa-3x"></i></div></a>
                        <p>Delete</p>
                    </div>902
                    {{-- <a href="#"><div class="bg-ico bg-icoo" id="whatsapp"><i class="fab fa-whatsapp social  whatsapp fa-3x"></i></div></a>
                    <a href="#"><div class="bg-ico bg-icoo" id="youtube"><i class="fab fa-youtube social  youtube fa-3x"></i></div></a> --}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endif
