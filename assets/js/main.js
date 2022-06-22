// ClassicEditor
// .create( document.querySelector( '#editor' ), {
//     ckfinder: {
//         uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
//     },
//     // toolbar: [ 'ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
// } )
// .catch( function( error ) {
//     console.error( error );
// } );

// CKEDITOR.replace( 'editor',
// {
//     filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
//     filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
//     filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
//     filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
// });

// ClassicEditor
//     .create( document.querySelector( '#editor' ), {
//         toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
//         heading: {
//             options: [
//                 { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
//                 { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
//                 { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
//             ]
//         }
//     } )
//     .catch( error => {
//         console.log( error );
//     } );


// ClassicEditor
//         .create( document.querySelector( '#editor' ), {
//             ckfinder: {
//                 uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
//             },
//             toolbar: [ 'ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
//         } )
//         .catch( function( error ) {
//             console.error( error );
//         } );


CKFinder.setupCKEditor();
CKEDITOR.replace( 'editor' );