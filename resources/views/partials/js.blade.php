<script src="{{asset('js/mdb.umd.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- Include the Quill library -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<script>
    const toolbarOptions = {
      container: [
        // Styling Options
        [{ font: [] }, { size: [] }], // Font and Size
        ['bold', 'italic', 'underline', 'strike'], // Text formatting
        [{ align: '' }, { align: 'center' }, { align: 'right' }, { align: 'justify' }], // Text alignment
        [{ color: [] }, { background: [] }], // Text and background color
        [{ list: 'ordered' }, { list: 'bullet' }], // List formatting

        // Image and Video Upload
        ['image', 'video'],
      ],
      handlers: {
        image: function () {
          const input = document.createElement('input');
          input.setAttribute('type', 'file');
          input.setAttribute('accept', 'image/*');
          input.click();

          input.onchange = () => {
            const file = input.files[0];
            const reader = new FileReader();
            reader.onload = () => {
              const range = this.quill.getSelection();
              const imageUrl = reader.result; // Base64 URL
              this.quill.insertEmbed(range.index, 'image', imageUrl);
            };
            reader.readAsDataURL(file);
          };
        },
        video: function () {
          const input = document.createElement('input');
          input.setAttribute('type', 'file');
          input.setAttribute('accept', 'video/*');
          input.click();

          input.onchange = () => {
            const file = input.files[0];
            const reader = new FileReader();
            reader.onload = () => {
              const range = this.quill.getSelection();
              const videoUrl = reader.result; // Base64 URL
              this.quill.insertEmbed(range.index, 'video', videoUrl);
            };
            reader.readAsDataURL(file);
          };
        }
      }
    };

    const quill = new Quill('#editor', {
      theme: 'snow',
      modules: {
        toolbar: toolbarOptions
      }
    });
  </script>
