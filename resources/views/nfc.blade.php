<div id="status">Waiting for NFC tag...</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        if ('NDEFReader' in window) {
            // Browser supports Web NFC API
            const statusElement = document.getElementById('status');

            async function readNFC() {
                try {
                    const ndef = new NDEFReader();
                    await ndef.scan();

                    ndef.addEventListener('reading', ({ message }) => {
                        const textDecoder = new TextDecoder();
                        for (const record of message.records) {
                            const payload = textDecoder.decode(record.data);
                            // Handle the payload data as needed
                            statusElement.textContent = `NFC Data: ${payload}`;
                        }
                    });

                    ndef.addEventListener('error', (error) => {
                        statusElement.textContent = `Error reading NFC tag: ${error.message}`;
                    });
                } catch (error) {
                    statusElement.textContent = `Error initializing NFC reader: ${error.message}`;
                }
            }

            readNFC();
        } else {
            // Browser does not support Web NFC API
            document.getElementById('status').textContent = 'Web NFC is not supported in this browser.';
        }
    });
    </script>
