@php
    use App\Helpers\Obn;
    use App\Helpers\Package\CoursePackage;
@endphp
<h2 class="heading-section">Combo tại RPA</h2>
<div class="course-combo__slider">
    <div class="course-combo__slider-item grid-container">
        @if (count($items) > 0)
            @foreach ($items as $item)
                @php
                    $id = $item['id'];
                    $thumbnail = Obn::showThumbnail($item['thumbnail']);
                    $price = Obn::showPrice($item['price']);
                    $created_at = Obn::showTime($item['created_at']) ?? '';
                    $totalStudent = 0;
                    $description = $item['description'] ?? '';
                    $slug = $item['slug'] ?? '';
                    $detailUrl = route('fe_combo/detail', ['slug' => $slug]);
                    $tryVideoId = '';
                    $videoClass = !$tryVideoId ? 'none-video' : '';
                @endphp
                <div class="card-course" data-toggle="popover" data-trigger="hover" data-id="{{ $id }}"
                    data-upload-date="{{ $created_at }}" data-duration="{{ $item['time'] ?? 0 }}"
                    data-user-enroll="{{ $totalStudent }}" data-description="{!! $description !!}" data-promo-text=""
                    data-is-best-seller="0" data-status-item="1" data-course-item-free="" data-original-title=""
                    title="" data-cart-url="{{ route('fe_cart/add', ['id' => $id,'type' => 'combo']) }}">
                    <div class="card-inner">
                        <a href="{{ $detailUrl }}" class="card-link"
                            tabindex="0">
                            <div class="card-header">
                                <img src="{{ $thumbnail }}" alt="course-image">
                                <div class="card-header__badget">
                                    <span class="card-header__badget-item"><i class="fal fa-play-circle"></i>0</span>
                                    <span class="card-header__badget-item"><i class="fal fa-star"></i>5</span>
                                </div>
                            </div>
                        </a>
                        <div class="card-body"><a  href="{{ $detailUrl }}" class="card-link"
                                tabindex="0">
                            </a>
                            <div class="card-info"><a  href="{{ $detailUrl }}" class="card-link"
                                    tabindex="0">
                                    <h5 class="heading-card">
                                        <span class="heading-card__main">{{ $item['title'] ?? '-' }}</span>
                                    </h5>
                                </a>
                                <p class="pricing-card"><a href="{{ $detailUrl }}" class="card-link"
                                        tabindex="0">
                                    </a>
                                    <a href="#" class="cta-open-video {{ $videoClass }}"
                                        data-source="" tabindex="0">
                                        <button class="btn-ripple" tabindex="0">
                                            <i class="fas fa-play"></i>
                                        </button>
                                        Học thử
                                    </a>
                                    <span class="course-pricing"> {{ $price }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
