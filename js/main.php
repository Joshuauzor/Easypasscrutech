<script>
        let fileToLoad = "<?= $pdf?>"

    // let fileToLoad = "<?= base_url('files/file.pdf')?>"
    const renderPDFDocument = (filename) => {
    let app = document.querySelector("#app")

    let pdfDiv = document.querySelector("div#pdf")

    let loaderDiv = document.querySelector("#loader-div")

    let canvas = document.querySelector("canvas")

    let buttons = {
        prevBtn: document.querySelector("button#previous"),
        nextBtn: document.querySelector("button#next"),
        zoomBtn: document.querySelector("button#zoom"),
        resetBtn: document.querySelector("button#reset")
    }


    let c = canvas.getContext("2d")

    let pdfObj, currentPageNum, numOfPages = undefined;
    let zoom = true
    let pageScale = 1

    function renderPDF(pdf, number, scale = 1) {
        pdf.getPage(number).then(page => {
            let viewport = page.getViewport(1)
            let size = (pdfDiv.clientWidth / viewport.width) * scale
            viewport = page.getViewport(size)
            canvas.width = viewport.width
            canvas.height = viewport.height

            const constraints = {
                canvasContext: c,
                viewport: viewport
            }
            page.render(constraints)
        })
    }

    PDFJS.disableStream = true
    PDFJS.getDocument(filename).then(pdf => {
        numOfPages = pdf.numPages
        currentPageNum = 1
        pdfObj = pdf
        renderPDF(pdf, currentPageNum)
    })


    buttons.prevBtn.onclick = () => {
        if (currentPageNum <= 1) {
            buttons.prevBtn.disabled = true
        } else {
            let prevPage = --currentPageNum
            renderPDF(pdfObj, prevPage)
            buttons.nextBtn.disabled = false
        }
    }

    buttons.nextBtn.onclick = () => {
        if (currentPageNum >= numOfPages) {
            buttons.nextBtn.disabled = true
        } else {
            let nextPage = ++currentPageNum;
            renderPDF(pdfObj, nextPage)
            buttons.prevBtn.disabled = false
        }
    }

    buttons.zoomBtn.onclick = () => {
        pageScale += 0.5
        renderPDF(pdfObj, currentPageNum, pageScale)
    }

    buttons.resetBtn.onclick = () => {
        pageScale = 1
        renderPDF(pdfObj, currentPageNum, pageScale)
    }

    canvas.addEventListener("dblclick", () => {
        if (zoom) {
            renderPDF(pdfObj, currentPageNum, 2)
            zoom = !zoom
        } else {
            renderPDF(pdfObj, currentPageNum)
            zoom = !zoom
        }
    })

    window.addEventListener("load", () => {

        loaderDiv.style.display = "none"
    })

}

renderPDFDocument(fileToLoad)
</script>