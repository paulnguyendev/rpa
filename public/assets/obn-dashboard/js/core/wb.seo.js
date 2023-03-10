if($('#seoBox').length){
    var $menu_name = $('input[data-seo="menu_name"]');
    var $title = $('input[data-seo="title"]');
    var $description = $('[data-seo="description"]');
    var $heading = $('[data-seo="heading"]');
    var $heading_description = $('[data-seo="heading_description"]');
    var $content = $('[data-seo="content"]');
    var $seo_title = $('input[data-seo="seo_title"]');
    var $seo_keyword = $('input[data-seo="seo_keyword"]');
    var $seo_description = $('textarea[data-seo="seo_description"]');
    var $slug = $('input[data-seo="url"]');
    var $seo_id = $('input[name="seo_id"]');

    var $seo_title_google = $(".seo_title_google");
    var $slug_goole = $(".slug_google");
    var $seo_description_google = $(".seo_description_google");

    reviewSeoOnGoogleSearch();

    if ($slug.val() === "homepage" || $slug.val() === "home") {
        $slug.val("");
    }

    $("#btnCheckSeo").on("click", function(event) {
        let title = $title.val();
        let description_id = $description.attr("id");
        let description_content;
        if (CKEDITOR.instances[description_id] == undefined) {
            description_content = $description.val();
        } else {
            description_content = CKEDITOR.instances[description_id].getData();
        }

        let content_id = $content.attr("id");
        let content;
        if (CKEDITOR.instances[content_id] == undefined) {
            content = $content.val();
        } else {
            content = CKEDITOR.instances[content_id].getData();
        }

        let seo_title = $seo_title.val();
        let seo_keyword = $seo_keyword.val();
        let seo_description = $seo_description.val();
        let url = $slug.val();
        let heading = $('input[data-seo="heading"]').val();
        let heading_description = $heading_description.val();
        let result;
        if (heading == null || heading == undefined) {
            WBSeo.checkSeoDetailPage({
                title: title,
                description: description_content,
                content: content,
                seo_title: seo_title,
                seo_keyword: seo_keyword,
                seo_description: seo_description,
                url: url
            }).then(function(result) {
                showSeoResult(result);
            });
        } else {
            result = WBSeo.checkSeoMenuPage({
                seo_title: seo_title,
                seo_keyword: seo_keyword,
                seo_description: seo_description,
                url: url,
                heading: heading,
                heading_description: heading_description
            }).then(function(result) {
                showSeoResult(result);
            });
        }
    });
    // view wb.checkSeo.js, check document description
    var showRecommendedKeywordAppearTime = recommendedAppearTime => {
        if (recommendedAppearTime < 0) {
            recommendedAppearTime = 1;
        }
        let html = `<span class="keyword-suggestion"> (B???n n??n r???i t??? kh??a trung b??nh ${parseInt(
            recommendedAppearTime
        )} l???n trong ??o???n n??y)</span>`;
        $(document)
            .find(".keyword-suggestion")
            .remove();
        setTimeout(() => {
            // keyword suggestion will be appended after seo result
            $('textarea[data-seo="content"]')
                .parent()
                .append(html);
        }, 200);
    };
    // view wb.checkSeo.js, check document description
    var clearRecommendedKeywordAppearTime = () => {
        $(".recommended-keyword-appear-time-label").html("");
    };
    var showSeoResult = function(result) {
        $(document)
            .find(".seo_result")
            .remove();
        $(document)
            .find(".help-block")
            .html("");
        Object.keys(result).forEach(function(key) {
            $('[data-seo="' + key + '"]')
                .closest('.form-group')
                .append(result[key]);
        });
        $(result.final_result).appendTo("#finalResult");
    };

    /*$seo_keyword.selectize({
        delimiter: ",",
        presist: false,
        addPrecedence: true,
        create: function (input) {
            return {
                value: input,
                text: input
            };
        },
        onChange: function (value) {
            let array_keyword = value.split(",");
            array_keyword[0] && createSlugFromKeyword(array_keyword[0]);
            array_keyword[0] && createRelatedFromKeyword(array_keyword[0]);
        },
        render: {
            option_create: function(data, escape) {
                return '<div class="create">Th??m <strong>' + escape(data.input) + '</strong>&hellip;</div>';
            }
        },
    });*/

    $seo_keyword.on("focusout", function() {
        if ($seo_keyword.val().trim().length > 0) {
            var kw = $seo_keyword.val().split(",")[0];
            createSlugFromKeyword(kw.trim());
            createRelatedFromKeyword(kw.trim());
        }
    });

    $seo_title.on("keyup", function() {
        let seo_title = $(this).val();
        $("#count_meta_title").html(seo_title.length);
        let seo_title_google =
            "Ti??u ????? seo website kh??ng v?????t qu?? 70 k?? t??? (t???t nh???t t??? 60-70 k?? t???)";
        if (seo_title) {
            seo_title_google = seo_title;
        }
        if (seo_title_google.length > 70) {
            seo_title_google = seo_title_google.substr(0, 67) + "...";
        }
        $seo_title_google.html(seo_title_google);
    });

    $seo_description.on("keyup", function() {
        let seo_description = $(this).val();
        $("#count_meta_description").html(seo_description.length);
        let seo_description_google =
            "M?? t??? seo website kh??ng v?????t qu?? 160 k?? t???. L?? nh???ng ??o???n m?? t??? ng???n g???n v??? website, b??i vi???t...";
        if (seo_description) {
            seo_description_google = seo_description;
        }
        if (seo_description_google.length > 160) {
            seo_description_google = seo_description_google.substr(0, 160);
        }
        $seo_description_google.html(seo_description_google);
    });

    function createSlugFromKeyword(keyword) {
        if (isNotChangeSlug) {
            let old_slug = $slug.val();
            let slug = keyword
                .toLowerCase()
                .trim()
                .replace(/&/g, "-and-")
                .replace(/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/g, "a")
                .replace(/(??|??|???|???|???|??|???|???|???|???|???)/g, "e")
                .replace(/(??|??|???|???|??)/g, "i")
                .replace(/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/g, "o")
                .replace(/(??|??|???|???|??|??|???|???|???|???|???)/g, "u")
                .replace(/(???|??|???|???|???)/g, "y")
                .replace(/(??)/g, "d")
                .replace(/[^a-z0-9-]+/g, "-")
                .replace(/\-\-+/g, "-")
                .replace(/^-+|-+$/g, "");

            if (old_slug != slug) {
                $slug.val(slug);
                $slug.trigger("change");
            }
        }
    }

    function reviewSeoOnGoogleSearch() {
        if($seo_id.val() && $slug.val() ){
            let slug = $slug.val();
        let page_type = $("#seoBox").data("type") || "category";
        let categoryId = $("select[name=cat_id]").val();
        let taxonomy = $("input[name=taxonomy]").val();

        jQuery.ajax({
            url: base_domain+"/admin/seo/slug/check-unique",
            type: "POST",
            dataType: "json",
            data: {
                _token: _token,
                slug: slug,
                id: $seo_id.val(),
                page_type: page_type,
                category_id: categoryId,
                taxonomy: taxonomy
            },
            complete: function(xhr, textStatus) {
                //called when complete
            },
            success: function(data, textStatus, xhr) {
                let slug_goole = "";
                if (data.success && !data.unique) {
                    // slug_goole = slug + "-" + Math.floor(Math.random() * 1000) + 1;
                    // $slug.val(slug_goole);

                    // $slug.parent().addClass("has-warning");
                    // $slug.next("span").html("");
                    // $slug
                    //     .next("span")
                    //     .append(
                    //         'URL theo t??? kh??a "' +
                    //             slug +
                    //             '" ???? b??? tr??ng, h??y t???o URL m???i theo t??? kh??a li??n quan nh??.'
                    //     );
                } else {
                    slug_goole = data.slug;
                    $slug.parent().removeClass("has-warning");
                    $slug.next("span.help-block").html("");
                }
                $('.prefix_url').html(data.url);
                if(page_type == 'homepage') {
                    $slug_goole.html(data.slug.replace('homepage-', '').replace(default_language, ''));
                }else{
                    $slug_goole.html(data.slug);
                    $('.slug_google_extension').html(data.extension);
                }
                // $('.prefix_url').each(function(index, el) {
                //     $(this).html(data.url);
                // });
            },
            error: function(xhr, textStatus, errorThrown) {
                //called when there is an error
            }
        });
        }

    }

    $("select[name=cat_id]").on("change", function(event) {
        event.preventDefault();
        reviewSeoOnGoogleSearch();
    });

    function generateSEO() {
        $seo_title.val($title.val());
        $seo_title.trigger("keyup");

        let description_id = $description.attr("id");
        let description_content;
        if (CKEDITOR.instances[description_id] == undefined) {
            description_content = $description.val();
        } else {
            description_content = CKEDITOR.instances[description_id].getData();
            description_content = $(description_content).text();
        }
        $seo_description.val(description_content);
        $seo_description.trigger("keyup");
        swal.close();
    }
    $("#generate_seo").click(function() {
        if ($seo_title.val() || $seo_description.val()) {
            warningSwal(
                {
                    title:
                        "N???i dung SEO ???? c?? s???n, b???n c?? ch???c ch???n thay ?????i kh??ng ?"
                },
                generateSEO
            );
        } else {
            generateSEO();
        }
    });

    var isNotChangeSlug = $slug.val() === "" ? true : false;
    var isNotChangeTite = $title.val() === "" ? true : false;
    var isNotChangeHeading = $heading.val() === "" ? true : false;
    var isNotChangeMenuName = $menu_name.val() === "" ? true : false;
    var isNotChangeSeoTite = $seo_title.val() === "" ? true : false;
    var isNotChangeSeoDescription = $seo_description.val() === "" ? true : false;

    $title.change(function() {
        if (isNotChangeSeoTite) {
            $seo_title.val($title.val());
            $seo_title.trigger("keyup");
        }

        if ($(this).val() === "") {
            isNotChangeTite = true;
            return;
        }
        isNotChangeTite = false;
    });
    $menu_name.change(function() {
        if ($(this).val() === "") {
            isNotChangeMenuName = true;
            return;
        }
        isNotChangeMenuName = false;
    });
    $seo_title.change(function() {
        if ($(this).val() === "") {
            isNotChangeSeoTite = true;
            return;
        }
        isNotChangeSeoTite = false;
    });
    $seo_description.change(function() {
        if ($(this).val() === "") {
            isNotChangeSeoDescription = true;
            return;
        }
        isNotChangeSeoDescription = false;
    });
    $heading_description.on("change", function() {
        if (isNotChangeSeoDescription) {
            $seo_description.val($(this).val());
            $seo_description.trigger("keyup");
        }
    });
    if (CKEDITOR.instances[$description.attr("id")] == undefined) {
        $description.on("change", function() {
            if (isNotChangeSeoDescription) {
                $seo_description.val($(this).val());
                $seo_description.trigger("keyup");
            }
        });
    } else {
        CKEDITOR.instances[$description.attr("id")].on("change", function() {
            if (isNotChangeSeoDescription) {
                let description_content = CKEDITOR.instances[
                    $description.attr("id")
                ].getData();
                $seo_description.val($(description_content).text());
                $seo_description.trigger("keyup");
            }
        });
    }

    function createRelatedFromKeyword(keyword) {
        if (isNotChangeTite) {
            $title.val(keyword.charAt(0).toUpperCase() + keyword.slice(1));
        }

        if (isNotChangeHeading) {
            $heading.val(keyword.charAt(0).toUpperCase() + keyword.slice(1));
        }

        if (isNotChangeMenuName) {
            $menu_name.val(keyword.charAt(0).toUpperCase() + keyword.slice(1));
        }

        if (isNotChangeSeoTite) {
            $seo_title.val(keyword.charAt(0).toUpperCase() + keyword.slice(1));
            $seo_title.trigger("keyup");
        }
    }

    function initSEO() {
        $seo_title.trigger("keyup");
        $seo_description.trigger("keyup");
        $slug_goole.html($slug.val());

        $("#other_link").collapse(
            $("#has_other_link").is(":checked") ? "show" : "hide"
        );

        $("#has_other_link").change(function(event) {
            // $('input[name=slug]').attr('disabled', $(this).is(":checked"));
            $("#other_link").collapse($(this).is(":checked") ? "show" : "hide");
        });

        $('input[name=slug]').change(function(event) {
            $('.prefix_url').html(location.protocol + '//' + location.hostname +'/');
            if(page_type != 'homepage') {
                $('.slug_google_extension').html(url_extension);
            }
            $slug_goole.html($(this).val());
            if(default_language != lang_code) {
                if(page_type == 'homepage') {
                    $slug_goole.html(lang_code);
                }else {
                    $slug_goole.html(lang_code + '/' + $slug_goole.html());
                }
            }
        });
    }
    initSEO();
}

