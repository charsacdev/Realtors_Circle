<div>
     <main>
         <div class="container">
              <div class="d-flex align-items-center justify-content-between my-4">
                   <h3 class="notification-header mt-5">Notifications</h3>
                   <form wire:submit.prevent="markAllRead" method="POST">
                     @csrf
                     <button class="btn-sm-success" id="mark-all-read">
                          Mark all as read
                          <span wire:loading><i class="fa fa-spin fa-spinner"></i></span>
                     </button>
                   </form>
              </div>
              <div id="notifications" class="mb-4">
                @if ($notifications)
                     @foreach ($notifications as $notification)
                          <div class="notification-item" onclick="markRead({'id' : {{ $notification->id }} })">
                               <div class="d-flex align-items-start gap-4">
                                    <img src="{{asset('agency-dashboard/asset/img/icons/copy-icon.png')}}" alt="">
                                    <div>
                                         <button class="btn-sm-success notification-title {{ $notification->is_read == '1' ? 'read' : '' }}">{{ $notification->title }}</button>
                                         <small class="d-block my-2">{{ $notification->message }}</small>
                                         <a href="{{ getNotificationUrl($notification->type, $notification->route_id) }}" class="primary-color">Click to view >>></a>
                                    </div>
                               </div>
                               <small class="opacity-50">{{ formatDate($notification->created_at) }}</small>
                          </div>
                     @endforeach
                @endif
              </div>
              <div class="my-5 pagination">
                   <button class="pagination-button"><i class="fa fa-arrow-left"></i> Prev</button>
                   <div class="pagination-links">
                        <a href="" class="pagination-link">1</a>
                        <a href="" class="pagination-link active">2</a>
                        <a href="" class="pagination-link">3</a>
                   </div>
                   <button class="pagination-button">Next <i class="fa fa-arrow-right"></i></button>
              </div>
         </div>
       </main>
 </div>
 