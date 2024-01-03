<div class="card">
    <div class="card-body">
        <p id="nfcStatus">NFC is not supported in this browser.</p>
        <button id="readNfcButton" class="btn btn-primary" disabled>Read NFC</button>
        <div id="nfcDataContainer">
            <p id="nfcData">NFC Data: </p>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        const nfcStatus = document.getElementById('nfcStatus');
        const readNfcButton = document.getElementById('readNfcButton');
        const nfcDataContainer = document.getElementById('nfcDataContainer');
        const nfcData = document.getElementById('nfcData');

        if ('NDEFReader' in window) {
            // Browser supports Web NFC API
            nfcStatus.textContent = 'NFC is supported in this browser.';
            readNfcButton.removeAttribute('disabled');
        } else {
            // Browser does not support Web NFC API
            nfcStatus.textContent = 'NFC is not supported in this browser.';
        }

        readNfcButton.addEventListener('click', async function () {
            try {
                const ndef = new NDEFReader();
                await ndef.scan();
                nfcStatus.textContent = 'Scanning for NFC tags...';

                ndef.addEventListener('reading', ({ message }) => {
                    nfcStatus.textContent = 'NFC tag found!';
                    const textRecord = message.records.find(record => record.recordType === 'text');
                    if (textRecord) {
                        const textDecoder = new TextDecoder();
                        const decodedText = textDecoder.decode(textRecord.data);
                        nfcData.textContent = 'NFC Data: ' + decodedText;
                    } else {
                        nfcData.textContent = 'NFC Data: No text record found.';
                    }
                });

                ndef.addEventListener('error', (error) => {
                    nfcStatus.textContent = 'Error reading NFC tag: ' + error.message;
                });
            } catch (error) {
                nfcStatus.textContent = 'Error initializing NFC reader: ' + error.message;
            }
        });
    });
</script>
