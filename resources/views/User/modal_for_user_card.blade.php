 <!-- Modal with dynamic ID -->
 <div class="modal" id="myModal{{$filteredCardform->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="d-flex justify-content-between">
                    <div>Edit Card</div>
                    <div> 
                        <a href="{{ route('full_visiter_card', $filteredCardform->id) }}" class="edit-icon u">
                         <i class="fas fa-edit fa-1x" style="color: #68b7e2;"></i>
                        </a>
                    </div>
                </div>

                
            
                {{-- <a href="{{ route('full_visiter_card', $filteredCardform->id) }}" class="edit-icon u" style="display: flex; align-items: center; margin-bottom: 20px; text-decoration: underline;">
                    <span style="margin-right: 10px;">Edit</span><i class="fas fa-edit fa-2x" style="color: #68b7e2; font-size: 19px;"></i>
                </a>
            
                <a href="{{ route('full_visiter_card', $filteredCardform->id) }}" class="edit-icon u" style="display: flex; align-items: center; margin-bottom: 20px; text-decoration: underline;">
                    <span style="margin-right: 10px;">Edit</span><i class="fas fa-edit fa-2x" style="color: #68b7e2; font-size: 19px;"></i>
                </a>
            
                <a href="{{ route('full_visiter_card', $filteredCardform->id) }}" class="edit-icon u" style="display: flex; align-items: center; margin-bottom: 20px; text-decoration: underline;">
                    <span style="margin-right: 10px;">Edit</span><i class="fas fa-edit fa-2x" style="color: #68b7e2; font-size: 19px;"></i>
                </a>  --}}
            
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for this specific modal -->
<script>
    // Get a reference to the modal
    const myModal{{$filteredCardform->id}} = document.getElementById('myModal{{$filteredCardform->id}}');

    // Function to show the modal
    function showModal{{$filteredCardform->id}}() {
        myModal{{$filteredCardform->id}}.style.display = 'block';
    }

    // Function to hide the modal
    function hideModal{{$filteredCardform->id}}() {
        myModal{{$filteredCardform->id}}.style.display = 'none';
    }

    // Trigger the modal when needed (e.g., on button click)
    const triggerButton{{$filteredCardform->id}} = document.getElementById('triggerButton{{$filteredCardform->id}}');
    triggerButton{{$filteredCardform->id}}.addEventListener('click', showModal{{$filteredCardform->id}});

    // Close the modal when the close button is clicked
    const closeButton{{$filteredCardform->id}} = myModal{{$filteredCardform->id}}.querySelector('.close');
    closeButton{{$filteredCardform->id}}.addEventListener('click', hideModal{{$filteredCardform->id}});

    // Close the modal when clicking outside the modal content
    window.addEventListener('click', function(event) {
        if (event.target === myModal{{$filteredCardform->id}}) {
            hideModal{{$filteredCardform->id}}();
        }
    });
</script>