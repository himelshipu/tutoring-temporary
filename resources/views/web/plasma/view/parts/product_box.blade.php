@if(isset($product))
<div class="course-box">
    <div class="course-box-overlay">
        <div class="course-box-overlay-body">
            <div class="course-box-avatar">
                <img src="{!! plasmaUserAvatar($product->user_id) !!}" alt="{{ $product->user->name ?? '' }}">
                <div>
                    <h6>{{ $product->user->name ?? '' }}</h6>
                    <span>Instructor</span>
                </div>
            </div>
            <h4>
                <a href="#">{{ $product->title ?? '' }}</a>
            </h4>
            <div class="rate">
                {!! plasmaContentStar($product->support_rate) !!}
            </div>
            <p>
                {!! $product->meta_description ?? '' !!}
            </p>
            <div class="course-box-overlay-feature">
                <div>
                    <svg id="_14-test" data-name="14-test" xmlns="http://www.w3.org/2000/svg" width="20.764" height="24.28" viewBox="0 0 20.764 24.28">
                        <g id="linear_color" data-name="linear color">
                            <circle id="Ellipse_5" data-name="Ellipse 5" cx="0.578" cy="0.578" r="0.578" transform="translate(8.816 1.926)" fill="#5a5b65" />
                            <path id="Path_1" data-name="Path 1" d="M156.578,151.469h2.312a.578.578,0,0,0,.578-.578v-2.312a.578.578,0,0,0-.578-.578h-2.312a.578.578,0,0,0-.578.578v2.312A.578.578,0,0,0,156.578,151.469Zm.578-2.312h1.156v1.156h-1.156Z"
                                  transform="translate(-151.423 -141.063)" fill="#5a5b65" />
                            <path id="Path_2" data-name="Path 2" d="M156.578,255.469h2.312a.578.578,0,0,0,.578-.578v-2.312a.578.578,0,0,0-.578-.578h-2.312a.578.578,0,0,0-.578.578v2.312A.578.578,0,0,0,156.578,255.469Zm.578-2.312h1.156v1.156h-1.156Z"
                                  transform="translate(-151.423 -240.053)" fill="#5a5b65" />
                            <path id="Path_3" data-name="Path 3" d="M252.578,173.156h3.469a.578.578,0,1,0,0-1.156h-3.469a.578.578,0,0,0,0,1.156Z" transform="translate(-242.799 -163.907)" fill="#5a5b65" />
                            <path id="Path_4" data-name="Path 4" d="M252.578,277.156h3.469a.578.578,0,1,0,0-1.156h-3.469a.578.578,0,1,0,0,1.156Z" transform="translate(-242.799 -262.897)" fill="#5a5b65" />
                            <path id="Path_5" data-name="Path 5"
                                  d="M79.837,19.622V7.094A1.158,1.158,0,0,0,78.68,5.938H72.832a2.506,2.506,0,0,0-4.875,0h-5.8A1.158,1.158,0,0,0,61,7.094V25.208a1.158,1.158,0,0,0,1.156,1.156H73.094a4.816,4.816,0,1,0,6.742-6.742Zm-1.156-.643a4.778,4.778,0,0,0-1.156-.288V7.094H78.68ZM68.467,7.094a.578.578,0,0,0,.575-.519.585.585,0,0,0,0-.059,1.349,1.349,0,1,1,2.7,0,.578.578,0,0,0,.578.578h.964V8.636H67.5V7.094Zm-2.12,0v2.12a.578.578,0,0,0,.578.578h6.937a.578.578,0,0,0,.578-.578V7.094h1.927v11.6a4.827,4.827,0,0,0-4.2,4.2H64.42V7.094ZM62.156,25.208V7.094h1.108v16.38a.578.578,0,0,0,.578.578h8.321a4.778,4.778,0,0,0,.288,1.156Zm14.79,1.927a3.661,3.661,0,1,1,3.661-3.661,3.661,3.661,0,0,1-3.661,3.661Z"
                                  transform="translate(-61 -4.012)" fill="#5a5b65" />
                            <path id="Path_6" data-name="Path 6" d="M351.638,372.169l-1.9,1.9-.747-.747a.578.578,0,1,0-.818.818l1.156,1.156a.578.578,0,0,0,.818,0l2.312-2.312a.578.578,0,1,0-.818-.818Z" transform="translate(-334.174 -354.272)" fill="#5a5b65" />
                        </g>
                    </svg>
                    <p>Quiz</p>
                </div>
                <div>
                    <svg id="_11-grade" data-name="11-grade" xmlns="http://www.w3.org/2000/svg" width="22" height="20.952" viewBox="0 0 22 20.952">
                        <path id="Path_8" data-name="Path 8"
                              d="M24.079,28H8.714a1.923,1.923,0,0,0-1.921,1.921v15.19H4.524A.524.524,0,0,0,4,45.635v1.4a1.923,1.923,0,0,0,1.921,1.921H21.286a1.923,1.923,0,0,0,1.921-1.921V32.54h2.27A.524.524,0,0,0,26,32.016v-2.1A1.923,1.923,0,0,0,24.079,28ZM5.921,47.9a.874.874,0,0,1-.873-.873v-.873H19.365v.873a1.909,1.909,0,0,0,.21.873Zm16.238-.873a.873.873,0,1,1-1.746,0v-1.4a.524.524,0,0,0-.524-.524H7.841V29.921a.874.874,0,0,1,.873-.873H22.369a1.909,1.909,0,0,0-.21.873Zm2.794-15.54H23.206V29.921a.873.873,0,1,1,1.746,0Z"
                              transform="translate(-4 -28)" fill="#5a5b65" />
                        <path id="Path_9" data-name="Path 9" d="M145.064,164a5.063,5.063,0,1,0,5.063,5.064A5.064,5.064,0,0,0,145.064,164Zm0,9.079a4.016,4.016,0,1,1,4.016-4.016A4.016,4.016,0,0,1,145.064,173.079Z" transform="translate(-134.063 -158.063)" fill="#5a5b65" />
                        <path id="Path_10" data-name="Path 10" d="M213.095,220.424a1.923,1.923,0,0,0-1.921,1.921v2.794a.524.524,0,1,0,1.048,0v-.873h1.746v.873a.524.524,0,1,0,1.048,0v-2.794A1.923,1.923,0,0,0,213.095,220.424Zm.873,2.794h-1.746v-.873a.873.873,0,0,1,1.746,0Z"
                              transform="translate(-202.131 -212.025)" fill="#5a5b65" />
                        <path id="Path_11" data-name="Path 11" d="M312.317,77.4h-.873v-.873a.524.524,0,1,0-1.048,0V77.4h-.873a.524.524,0,1,0,0,1.048h.873v.873a.524.524,0,1,0,1.048,0v-.873h.873a.524.524,0,0,0,0-1.048Z" transform="translate(-295.686 -73.905)" fill="#5a5b65" />
                        <path id="Path_12" data-name="Path 12" d="M116.524,77.048h6.984a.524.524,0,0,0,0-1.048h-6.984a.524.524,0,0,0,0,1.048Z" transform="translate(-111.111 -73.905)" fill="#5a5b65" />
                        <path id="Path_13" data-name="Path 13" d="M120.19,124.524a.524.524,0,0,0-.524-.524h-3.143a.524.524,0,0,0,0,1.048h3.143A.524.524,0,0,0,120.19,124.524Z" transform="translate(-111.111 -119.81)" fill="#5a5b65" />
                    </svg>
                    <p>Certificate</p>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="27.336" height="20.394" viewBox="0 0 27.336 20.394">
                        <g id="_06-audio_book" data-name="06-audio book" transform="translate(0)">
                            <g id="linear_color" data-name="linear color">
                                <path id="Path_7" data-name="Path 7"
                                      d="M31.335,35.838a3.694,3.694,0,0,0-3.1-3.64A1.3,1.3,0,0,0,27,31.282V29.329a9.329,9.329,0,1,0-18.658,0v1.953a1.3,1.3,0,0,0-1.243.916,3.688,3.688,0,0,0,0,7.28,1.3,1.3,0,0,0,1.243.916h1.3a1.3,1.3,0,0,0,1.3-1.3V32.583a1.3,1.3,0,0,0-1.3-1.3V29.329a8.027,8.027,0,1,1,16.055,0v1.953a1.3,1.3,0,0,0-1.3,1.3v6.509a1.3,1.3,0,0,0,1.3,1.3H27a1.3,1.3,0,0,0,1.243-.916,3.694,3.694,0,0,0,3.1-3.64Zm-26.034,0a2.391,2.391,0,0,1,1.736-2.3v4.593a2.391,2.391,0,0,1-1.736-2.3Zm4.34,3.254h-1.3V32.583h1.3Zm17.355,0h-1.3V32.583H27Zm1.3-.958V33.541a2.387,2.387,0,0,1,0,4.593Z"
                                      transform="translate(-3.999 -20)" fill="#5a5b65" />
                            </g>
                        </g>
                    </svg>
                    <p>Support</p>
                </div>
            </div>
            <a href="/product/{!! $product->id !!}/{!! \Illuminate\Support\Str::slug($product->title) ?? '' !!}" class="button-primary btn-block">Enroll</a>
        </div>
        <div class="course-box-overlay-footer">
            <p>
                <i class="iconly-brokenTime-Circle"></i>
                {!! contentDuration($product->id) !!}
            </p>
            <h5>
                @if(isset($meta['price']) && $meta['price']>0)
                    {{currencySign()}}{{ price($product->id,$product->category_id,$meta['price'])['price'] }}
                @else
                    {{ trans('main.free') }}
                @endif
            </h5>
        </div>
    </div>
    <a href="#">
        <img src="{{ !empty($meta['thumbnail']) ? $meta['thumbnail'] : '' }}" alt="{{ $product->title ?? '' }}">
    </a>
    <p>Lifestyle</p>
    <h4 class="heading-3">
        <a href="/product/{!! $product->id !!}/{!! \Illuminate\Support\Str::slug($product->title) ?? '' !!}">{{ mb_substr($product->title,0,20) ?? '' }}...</a>
    </h4>
    <div class="course-box-avatar">
        <img src="{!! plasmaUserAvatar($product->user_id) !!}" alt="{{ $product->user->name ?? '' }}">
        <div>
            <h6>{{ $product->user->name ?? '' }}</h6>
            <span>Instructor</span>
        </div>
    </div>
    <div class="course-box-footer">
        <div class="rate">
            {!! plasmaContentStar($product->support_rate) !!}
        </div>
        <h5>
            @if(isset($meta['price']) && $meta['price']>0)
                {{currencySign()}}{{ price($product->id,$product->category_id,$meta['price'])['price'] }}
            @else
                {{ trans('main.free') }}
            @endif
        </h5>
    </div>
</div>
@endif
