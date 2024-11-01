<div>
    
    <main>
        <div class="container">
             <form wire:submit.prevent="saveColors" class="mb-5">
               @csrf
                  <div class="row">
                    <h4 class="form-title mt-3 mb-2">Choose Color Palette</h4>
                    <small class="mb-4 text-info">(Click on color to pick new color)</small>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Pick Primary Color</label>
                                 <div class="color-picker-ctn">
                                      <div class="primary-color-picker color-selected-preview"></div>
                                      <input type="text" readonly name="primary_color" value="" wire:model="form.primary_color" name="primary" class="color-ctn" id="primary-color-ctn">
                                 </div>
                                 <div>
                                   @error('form.primary_color') 
                                        <span class="error">{{ $message }}</span> 
                                   @enderror
                                 </div>
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Pick Secondary Color</label>
                                 <div class="color-picker-ctn">
                                      <div class="secondary-color-picker color-selected-preview"></div>
                                      <input type="text" readonly name="secondary_color" value="" wire:model="form.secondary_color" class="color-ctn" id="secondary-color-ctn">
                                 </div>
                                 <div>
                                   @error('form.secondary_color') <span class="error">{{ $message }}</span> @enderror
                                 </div>
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Pick Accent Color</label>
                                 <div class="color-picker-ctn">
                                      <div class="accent-color-picker color-selected-preview"></div>
                                      <input type="text" readonly name="accent_color" value="" wire:model="form.accent_color" class="color-ctn" id="accent-color-ctn">
                                 </div>
                                 <div>
                                   @error('form.accent_color') <span class="error">{{ $message }}</span> @enderror
                                 </div>
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Pick Text Color</label>
                                 <div class="color-picker-ctn">
                                      <div class="text-color-picker color-selected-preview"></div>
                                      <input type="text" value="" readonly name="text_color" wire:model="form.text_color" class="color-ctn" id="text-color-ctn">
                                 </div>
                                 <div>
                                   @error('form.text_color') <span class="error">{{ $message }}</span> @enderror
                                 </div>
                            </div>
                       </div>
                       <div class="col-sm-6">
                         <label for="">Status</label>
                         <select name="" wire:model="form.is_active" class="form-control" id="">
                              <option value="">Select status</option>
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                         </select>
                         <div>
                              @error('form.is_active') <span class="error">{{ $message }}</span> @enderror
                            </div>
                       </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mt-4">
                       <a href="/agency/website-settings" class="new-discussion-btn outline-success px-5">Back</a>
                       <button 
                        {{-- wire:click="saveColors"  --}}
                        class="new-discussion-btn btn-success px-5">
                         Save &nbsp;
                         <span wire:loading>
                           <i class="fa fa-spinner fa-spin"></i>
                         </span>
                    </button>
                  </div>
             </form>

        </div>
      </main>
</div>


@script
<script>
     $(document).ready(function(){
          
               // Color Picker 
          const pickr_primary = Pickr.create({
               el: '.primary-color-picker',
               theme: 'classic', // can be 'monolith', or 'classic' or 'nano'
               container: 'div',
               default: '#45BA63',
               swatches: [
               'rgba(244, 67, 54, 1)',
               'rgba(233, 30, 99, 0.95)',
               'rgba(156, 39, 176, 0.9)',
               'rgba(103, 58, 183, 0.85)',
               'rgba(63, 81, 181, 0.8)',
               'rgba(33, 150, 243, 0.75)',
               'rgba(3, 169, 244, 0.7)',
               'rgba(0, 188, 212, 0.7)',
               'rgba(0, 150, 136, 0.75)',
               'rgba(76, 175, 80, 0.8)',
               'rgba(139, 195, 74, 0.85)',
               'rgba(205, 220, 57, 0.9)',
               'rgba(255, 235, 59, 0.95)',
               'rgba(255, 193, 7, 1)',
               ],
          
               components: {
          
                    // Main components
                    preview: true,
                    opacity: true,
                    hue: true,
          
                    // Input / output Options
                    interaction: {
                         hex: true,
                         // rgba: true,
                         // hsla: true,
                         // hsva: true,
                         // cmyk: true,
                         input: true,
                         clear: true,
                         save: true
                    }
               }
          })

          const pickr_secondary = Pickr.create({
               el: '.secondary-color-picker',
               theme: 'classic', // or 'monolith', or 'nano'
               container: 'div',
               default: '#1179EC',
               swatches: [
               'rgba(244, 67, 54, 1)',
               'rgba(233, 30, 99, 0.95)',
               'rgba(156, 39, 176, 0.9)',
               'rgba(103, 58, 183, 0.85)',
               'rgba(63, 81, 181, 0.8)',
               'rgba(33, 150, 243, 0.75)',
               'rgba(3, 169, 244, 0.7)',
               'rgba(0, 188, 212, 0.7)',
               'rgba(0, 150, 136, 0.75)',
               'rgba(76, 175, 80, 0.8)',
               'rgba(139, 195, 74, 0.85)',
               'rgba(205, 220, 57, 0.9)',
               'rgba(255, 235, 59, 0.95)',
               'rgba(255, 193, 7, 1)',
               ],
          
               components: {
          
                    // Main components
                    preview: true,
                    opacity: true,
                    hue: true,
          
                    // Input / output Options
                    interaction: {
                    hex: true,
                    // rgba: true,
                    // hsla: true,
                    // hsva: true,
                    // cmyk: true,
                    input: true,
                    clear: true,
                    save: true
                    }
               }
          })
          
          const pickr_accent = Pickr.create({
               el: '.accent-color-picker',
               theme: 'classic', // or 'monolith', or 'nano'
               container: 'div',
               default: '#202A54',
               swatches: [
               'rgba(244, 67, 54, 1)',
               'rgba(233, 30, 99, 0.95)',
               'rgba(156, 39, 176, 0.9)',
               'rgba(103, 58, 183, 0.85)',
               'rgba(63, 81, 181, 0.8)',
               'rgba(33, 150, 243, 0.75)',
               'rgba(3, 169, 244, 0.7)',
               'rgba(0, 188, 212, 0.7)',
               'rgba(0, 150, 136, 0.75)',
               'rgba(76, 175, 80, 0.8)',
               'rgba(139, 195, 74, 0.85)',
               'rgba(205, 220, 57, 0.9)',
               'rgba(255, 235, 59, 0.95)',
               'rgba(255, 193, 7, 1)',
               ],
          
               components: {
          
                    // Main components
                    preview: true,
                    opacity: true,
                    hue: true,
          
                    // Input / output Options
                    interaction: {
                    hex: true,
                    // rgba: true,
                    // hsla: true,
                    // hsva: true,
                    // cmyk: true,
                    input: true,
                    clear: true,
                    save: true
                    }
               }
          })
          
          const pickr_text = Pickr.create({
               el: '.text-color-picker',
               theme: 'classic', // or 'monolith', or 'nano'
               container: 'div',
               // default: '#6B6B6B',
               swatches: [
               'rgba(244, 67, 54, 1)',
               'rgba(233, 30, 99, 0.95)',
               'rgba(156, 39, 176, 0.9)',
               'rgba(103, 58, 183, 0.85)',
               'rgba(63, 81, 181, 0.8)',
               'rgba(33, 150, 243, 0.75)',
               'rgba(3, 169, 244, 0.7)',
               'rgba(0, 188, 212, 0.7)',
               'rgba(0, 150, 136, 0.75)',
               'rgba(76, 175, 80, 0.8)',
               'rgba(139, 195, 74, 0.85)',
               'rgba(205, 220, 57, 0.9)',
               'rgba(255, 235, 59, 0.95)',
               'rgba(255, 193, 7, 1)',
               ],
          
               components: {
          
                    // Main components
                    preview: true,
                    opacity: true,
                    hue: true,
          
                    // Input / output Options
                    interaction: {
                    hex: true,
                    // rgba: true,
                    // hsla: true,
                    // hsva: true,
                    // cmyk: true,
                    input: true,
                    clear: true,
                    save: true
                    }
               }
          })


          //Primary color
          pickr_primary.on('init', instance => {
          showHexCodeFromInstance(instance, '#primary-color-ctn')
          }).on('save', (color, instance) => {
               showHexCodeFromColor(color, '#primary-color-ctn');
               pickr_primary.hide();
          });

                 

          //Secondary color
          pickr_secondary.on('init', instance => {
          showHexCodeFromInstance(instance, '#secondary-color-ctn')
          }).on('save', (color, instance) => {
               showHexCodeFromColor(color, '#secondary-color-ctn');
               pickr_secondary.hide();
          });

          // .on('init', instance => {
          //   showHexCodeFromInstance(instance, '#accent-color-ctn')
          // })

          //Accent color
          pickr_accent.on('init', instance => {
          showHexCodeFromInstance(instance, '#accent-color-ctn')
          }).on('save', (color, instance) => { 
          showHexCodeFromColor(color, '#accent-color-ctn');
          pickr_accent.hide();
          });

          //Text color
          pickr_text.on('init', instance => {
          showHexCodeFromInstance(instance, '#text-color-ctn')
          }).on('save', (color, instance) => {
          showHexCodeFromColor(color, '#text-color-ctn')
          pickr_text.hide();
          });




          function showHexCodeFromInstance(instance, id){
          var hexCode = instance._color.toHEXA().toString();
          document.querySelector(id).value = hexCode;
          document.querySelector(id).dispatchEvent(new Event('input'));
          }

          function showHexCodeFromColor(color, id){
          var hexCode = color.toHEXA().toString();
          document.querySelector(id).value = hexCode;
          document.querySelector(id).dispatchEvent(new Event('input'));
          }
                  
     });
</script>
@endscript

