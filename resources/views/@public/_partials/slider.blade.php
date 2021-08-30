<div class="rev_slider_wrapper fullwidthbanner-container">
    <div id="rev-slider2" class="rev_slider fullwidthabanner">
        <ul>
            @foreach($sliders as $slider)
                <li data-transition="random">
                    <!-- Main Image -->
                    <img src="{{ url('assets_public/images/slider/'.$slider->image) }}" alt="" data-bgposition="center center" data-no-retina>
                    <!-- Layers -->
                    <div class="sfb tp-caption tp-resizeme text-white font-family-heading text-shadow font-weight-700 letter-spacing-2px"
                         data-x="['center','center','center','center']" data-hoffset="['30','30','30','30']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-110']"
                         data-fontsize="['58','54','50','46']"
                         data-lineheight="['68','64','60','56']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-mask_in="x:0px;y:0px;"
                         data-mask_out="x:inherit;y:inherit;"
                         data-start="1500"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on">
                        {{ getFromJson($slider->text_1 , lang()) }}
                    </div>
                    <div class="sfb tp-caption tp-resizeme text-white text-shadow"
                         data-x="['center','center','center','center']" data-hoffset="['30','30','30','30']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-34','-34','-34','-34']"
                         data-fontsize="['16','16','16','16']"
                         data-lineheight="['30','30','30','28']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="1800"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-lasttriggerstate="reset">
                        {!! getFromJson($slider->text_2 , lang()) !!}
                    </div>
                    <div class="sfb tp-caption"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['63','63','63','63']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                         data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="2100"
                         data-splitin="none"
                         data-splitout="none"
                         data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                         data-responsive="on">
                        <a href="{{ $slider->button_1_link }}" class="wprt-button rounded-3px">{{ getFromJson($slider->button_1_text , lang()) }}</a>
                    </div>
                    <div class="sfb tp-caption"
                         data-x="['center','center','center','center']" data-hoffset="['240','230','230','220']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['63','63','63','63']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                         data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="2200"
                         data-splitin="none"
                         data-splitout="none"
                         data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                         data-responsive="on">
                        <a href="{{ $slider->button_2_link }}" class="wprt-button outline rounded-3px">{{ getFromJson($slider->button_2_text , lang()) }}</a>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>
