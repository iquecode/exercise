
function maskIqueDev()
        {
        const masks = {
            phone (value) {
            return value
                .replace(/\D+/g, '')
                .replace(/(\d{2})(\d)/, '($1) $2')
                .replace(/(\d{4})(\d)/, '$1-$2')
                .replace(/(\d{4})-(\d)(\d{4})/, '$1$2-$3')
                .replace(/(-\d{4})\d+?$/, '$1')
            },
        
            name (value) {
            return value
                .replace(/[^a-zA-Z ]/g, "");
            }
        }


  document.querySelectorAll('input').forEach($input => {
    
    const field = $input.dataset.mask_ique
    if (typeof masks[field] === 'function')
    {
        $input.addEventListener('input', e => {
            e.target.value = masks[field](e.target.value)
          }, false)
    }
   
  })
    }

    maskIqueDev();

