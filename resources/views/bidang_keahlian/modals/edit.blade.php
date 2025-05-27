 <!-- Modal header -->
 <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
     <h3 class="text-lg font-semibold text-gray-900">
         Edit Bidang Keahlian
     </h3>
     <button type="button" id="modal-close"
         class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
         data-modal-toggle="modal">
         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
         </svg>
         <span class="sr-only">Close modal</span>
     </button>
 </div>
 <!-- Modal body -->
 @include('bidang_keahlian.partials.form', [
     'action' => route('admin.master.bidang-keahlian.update', $bidang_keahlian->bidang_keahlian_id),
     'method' => 'PUT',
     'buttonText' => 'Update',
     'buttonIcon' => 'fa-solid fa-plus',
     'formId' => 'updateBidangKeahlianForm',
 ])
