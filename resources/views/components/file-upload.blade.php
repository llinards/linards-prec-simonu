<input class="file-upload" type="file" id="{{ $name }}" name="{{ $name }}[]">

<script type="module">
    const fileUpload = document.querySelector('.file-upload');
    const fileId = fileUpload.getAttribute('id');
    FilePond.registerPlugin(FilePondPluginFileValidateSize);
    FilePond.registerPlugin(FilePondPluginFileValidateType);
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.create(fileUpload);

    const options = {
        server: {
            url: '/gallery/image/upload',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        },
        allowFileSizeValidation: true,
        allowReorder: true,
        allowImagePreview: true,
    };

    const optionsConfig = {
        "gallery-images": {
            labelIdle: 'Pievienot bildes',
            maxFileSize: '512KB',
            acceptedFileTypes: ['image/*'],
            allowMultiple: true
        }
    };

    if (optionsConfig[fileId]) {
        Object.assign(options, optionsConfig[fileId]);
    }
    FilePond.setOptions(options);
</script>
