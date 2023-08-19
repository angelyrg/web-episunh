{/* <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js" integrity="sha512-Z8CqofpIcnJN80feS2uccz+pXWgZzeKxDsDNMD/dJ6997/LSRY+W4NmEt9acwR+Gt9OHN0kkI1CTianCwoqcjQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> */}

function renderPdfToImage(pdfUrl) {
    const pdfjsLib = window['pdfjs-dist/build/pdf'];
    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');

    pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
        return pdf.getPage(1);
    }).then(page => {
        const viewport = page.getViewport({
            scale: 1
        });
        canvas.width = viewport.width;
        canvas.height = viewport.height;

        const renderContext = {
            canvasContext: ctx,
            viewport: viewport,
        };

        return page.render(renderContext).promise;
    }).then(() => {
        const imageDataURL = canvas.toDataURL('image/jpeg');
        const img = document.createElement('img');
        img.src = imageDataURL;
        document.getElementById('preview').appendChild(img);
    }).catch(error => {
        console.error('Error al cargar el PDF:', error);
    });
}

function handleFileChange() {
    const fileInput = document.getElementById('pdfInput');
    const file = fileInput.files[0];

    if (file) {
        const pdfUrl = URL.createObjectURL(file);
        document.getElementById('preview').innerHTML = ''; // Limpiar el contenido previo
        renderPdfToImage(pdfUrl);
    }
}