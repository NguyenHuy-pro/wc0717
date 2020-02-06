<?php

class Hfunction
{
    // Alias
    function stripUnicode($str)
    {
        if (!$str) return false;
        $unicode = array(
            'a' => 'ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ậ|ẫ|á|à|ả|ạ|ã',
            'A' => 'Ă|Ắ|Ằ|Ẵ|Ẳ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ẫ|Á|À|Ả|Ã|Ạ',
            'd' => 'đ',
            'D' => 'Đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
        );
        foreach ($unicode as $nonUnicode => $uni) {
            $arr = explode('|', $uni);
            $str = str_replace($arr, $nonUnicode, $str);
        }
        return $str;
    }

    function alias($str, $linked = '')
    {
        $str = trim($str);
        if ($str == '') return '';
        $str = str_replace('"', '', $str);
        $str = str_replace("'", '', $str);
        $str = $this->stripUnicode($str);
        $str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
        $str = str_replace(' ', $linked, $str);
        return $str;
    }

    function cutString($string, $length, $more = '')
    {
        if (strlen($string) > $length) {
            $string = mb_substr($string, 0, $length, 'UTF-8') . $more;
        }
        return $string;
    }

    function convertViewValue($value)
    {
        if (1000 <= $value && $value < 1000000) {
            $value = ($value / 1000) . "K";
        } elseif (1000000 <= $value && $value < 1000000000) {
            $value = ($value / 1000000) . "M";
        }
        return $value;
    }

    #create option of select
    function option($data, $select = 0)
    {
        foreach ($data as $key => $value) {
            $id = $value['optionKey'];
            $name = $value['optionValue'];
            if ($select != 0 && $id == $select) {
                echo "<option value='$id' selected='selected'> $name</option>";
            } else {
                echo "<option value='$id' > $name</option>";
            }
        }
    }

    function optionMultiple($data, $parent = 0, $str = "--", $select = 0)
    {
        foreach ($data as $key => $value) {
            $id = $value['optionKey'];
            $name = $value['optionValue'];
            $parentId = $value['optionParent'];
            if ($parentId == $parent) {
                if ($select != 0 && $id == $select) {
                    echo "<option value='$id' selected='selected'>$str $name</option>";
                } else {
                    echo "<option value='$id' >$str $name</option>";
                }
            }
        }
    }

    // Up load file
    function getTypeImg($image)
    {
        $array = explode('.', $image);
        return end($array);
    }

    function selectOneImage($id = '', $name = '', $typeImage = '', $widthImg = '', $heightImg = '')
    {
        $widthImg = (!empty($widthImg)) ? $widthImg : 150;
        $heightImg = (!empty($heightImg)) ? $heightImg : 100;
        ?>
        <div>
            <div>
                <input id="<?php echo $id; ?>" name="<?php echo $name; ?>"
                       onchange="wcMain.select.image(this,'#wrapView_<?php echo $name; ?>','viewImage_<?php echo $name; ?>','<?php echo $typeImage; ?>')"
                       type="file">
            </div>
            <div id="wrapView_<?php echo $name; ?>" class="wc-display-none tf-vertical-bottom">
                <img id="viewImage_<?php echo $name; ?>" class="wc-margin-10"
                     style="max-width:<?php echo $widthImg ?>px;max-height: <?php echo $heightImg ?>px;"/>
                <span id="cancel_<?php echo $name; ?>" class="wc-cursor-pointer"
                      onclick="wcMain.select.imageCancel('#<?php echo $id; ?>','#wrapView_<?php echo $name; ?>');">Cancel</span>
            </div>
        </div>
        <?php
    }

    # select image on size
    function selectOneImageFollowSize($id = '', $name = '', $typeImage = '', $idImageCheck = '', $limitSize = '', $limitWidth = '', $limitHeight = '', $widthImgView = '', $heightImgView = '')
    {
        $widthImgView = (!empty($widthImgView)) ? $widthImgView : 150;
        $heightImgView = (!empty($heightImgView)) ? $heightImgView : 100;
        ?>
        <div>
            <div>
                <input id="<?php echo $id; ?>" name="<?php echo $name; ?>" data-size="<?php echo $limitSize ?>"
                       data-width="<?php echo $limitWidth ?>" data-height="<?php echo $limitHeight ?>"
                       onchange="wcMain.select.imageFollowSize(this,'#wrapView_<?php echo $name; ?>','viewImage_<?php echo $name; ?>','<?php echo $typeImage; ?>','<?php echo $idImageCheck; ?>')"
                       type="file">
            </div>
            <div id="wrapView_<?php echo $name; ?>" class="wc-display-none wc-vertical-bottom">
                <img id="viewImage_<?php echo $name; ?>" class="wc-margin-10"
                     style="max-width:<?php echo $widthImgView ?>px;max-height: <?php echo $heightImgView ?>px;"/>
                <img id="<?php echo $idImageCheck; ?>" class="wc-display-none" alt="image"/>
                <span id="cancel_<?php echo $name; ?>" class="wc-cursor-pointer"
                      onclick="wcMain.select.imageCancel('#<?php echo $id; ?>','#wrapView_<?php echo $name; ?>');">Cancel</span>
            </div>
        </div>
        <?php
    }

    function dotNumber($strNum)
    {
        $result = "";
        $len = strlen($strNum);
        $counter = 3;
        while ($len - $counter >= 0) {
            $con = substr($strNum, $len - $counter, 3);
            $result = '.' . $con . $result;
            $counter += 3;
        }
        $con = substr($strNum, 0, 3 - ($counter - $len));
        $result = $con . $result;
        if (substr($result, 0, 1) == '.') {
            $result = substr($result, 1, $len + 1);
        }
        return $result;
    }

    function getTimeCode()
    {
        return date("H") . date("y") . date("I") . date("m") . date("s") . date("d");
    }

    function objectToArray($data)
    {
        if (is_array($data) || is_object($data)) {
            $result = array();
            foreach ($data as $key => $value) {
                $result[$key] = object_to_array($value);
            }
            return $result;
        }
        return $data;
    }

    // page
    function page($data)
    {
        echo "<ul class='pagination page-tool'>";
        $lastPage = $data->lastPage();
        $currentPage = $data->currentPage();
        $viewPage = 5;
        if (($currentPage + $viewPage) < $lastPage) {
            $limitPage = $currentPage + $viewPage;
        } else {
            $limitPage = $lastPage;
        }
        if ($currentPage > 5) {
            $i = $currentPage - 4;
        } else {
            $i = 1;
        }
        if ($currentPage != 1) {
            $hrefFirst = str_replace('/?', '?', $data->url(1));
            $hrefPrev = str_replace('/?', '?', $data->url($currentPage - 1));
            echo "
                <li>
                    <a href ='$hrefFirst' > First</a >
                </li >
                <li >
                    <a href ='$hrefPrev' > Prev</a >
                </li >";
        }
        for ($i; $i <= $limitPage; $i++) {
            if ($currentPage == $i) $active = 'active'; else $active = '';
            $hrefCenter = str_replace('/?', '?', $data->url($i));
            echo "
                <li class='$active' >
                    <a href = '$hrefCenter'>$i</a >
                </li >";
        }
        if ($currentPage != $lastPage && $lastPage > 1) {
            $hrefNext = str_replace('/?', '?', $data->url($currentPage + 1));
            $hrefLast = str_replace('/?', '?', $data->url($lastPage));
            echo "
            <li >
                <a href = '$hrefNext' > Next</a >
            </li >
            <li >
                <a href = '$hrefLast' > Last</a >
            </li >";
        }
        echo "</ul>";
    }

    # ========== ========== ========== GENERAL ========== ========== ==========
    # go to url
    public function goToUrl($url)
    {
        echo "<script type='text/javascript'>window.location ='$url'; </script>";
    }

    # get Client IP
    public function getClientIP()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        return $ip;
    }
}

?>