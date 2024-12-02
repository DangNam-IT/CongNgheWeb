<?php
if (!isset($_SESSION['flowers'])) {
    $_SESSION['flowers'] = [
        [
            "name" => " Hoa Dạ yến thảo",
            "description" => "Dạ yến thảo là lựa chọn thích hợp cho những ai yêu thích trồng hoa làm đẹp nhà ở. Hoa có thể nở rực quanh năm, kể cả tiết trời se lạnh của mùa xuân hay cả những ngày nắng nóng cao điểm của mùa hè. Dạ yến thảo được trồng ở chậu treo nơi cửa sổ hay ban công, dáng hoa mềm mại, sắc màu đa dạng nên được yêu thích vô cùng.",
            "image" => "images/Hoa_da_yen_thao.png"
        ],
        [
            "name" => " Hoa đồng tiền",
            "description" => "Dạ yến thảo là lựa chọn thích hợp cho những ai yêu thích trồng hoa làm đẹp nhà ở. Hoa có thể nở rực quanh năm, kể cả tiết trời se lạnh của mùa xuân hay cả những ngày nắng nóng cao điểm của mùa hè. Dạ yến thảo được trồng ở chậu treo nơi cửa sổ hay ban công, dáng hoa mềm mại, sắc màu đa dạng nên được yêu thích vô cùng.",
            "image" => "images/Hoa_dong_tien.png"
        ],
        [
            "name" => " Hoa giấy",
            "description" => "Dạ yến thảo là lựa chọn thích hợp cho những ai yêu thích trồng hoa làm đẹp nhà ở. Hoa có thể nở rực quanh năm, kể cả tiết trời se lạnh của mùa xuân hay cả những ngày nắng nóng cao điểm của mùa hè. Dạ yến thảo được trồng ở chậu treo nơi cửa sổ hay ban công, dáng hoa mềm mại, sắc màu đa dạng nên được yêu thích vô cùng.",
            "image" => "images/Hoa_giay.png"
        ],
        [
            "name" => " Hoa thanh tú",
            "description" => "Mang dáng hình tao nhã,
             màu sắc thiên thanh dịu dàng của hoa thanh tú
              có thể khiến bạn cảm thấy vô cùng nhẹ nhàng khi nhìn ngắm",
            "image" => "images/Hoa_Thanh_Tu.png"
        ],
        [
            "name" => " Hoa đèn lồng",
            "description" => "Giống như tên gọi, hoa đèn lồng có vẻ đẹp 
            giống như chiếc đèn lồng đỏ trên cao. Nếu giàu trí tưởng tượng hơn,
             chúng ta sẽ hình dung hoa khi nụ đổ xuống thành từng chùm, 
             kết năm kết ba như những thiếu nữ xúng xính trong chiếc đầm dạ hội. ",
            "image" => "images/Hoa_den_long.png"
        ],
        [
            "name" => " Hoa cẩm chướng",
            "description" => "Cẩm chướng là loại hoa thích hợp trồng vào dịp xuân -
             hè, nếu tiết trời không quá lạnh có thể kéo dài đến tận mùa đông.
              Hoa có phần thân mảnh, các đốt ngắn mang lá kép cùng nhiều màu sắc như hồng,
               vàng, đỏ, tím,… thậm chí có thể pha lẫn màu để tạo nên đường viền xinh xắn. ",
            "image" => "images/Hoa_cam_chuong.png"
        ],

        [
            "name" => " Hoa huỳnh anh",
            "description" => "Nếu bạn đang đi tìm một loài hoa tô điểm cho khu vực ban
             công hoặc hàng rào ngôi nhà thì huỳnh anh là một lựa chọn thích hợp trong mùa này hơn cả. 
             Hoa có màu vàng rực, hình dạng như chiếc kèn be bé inh xinh, lại dễ trồng, mọc nhanh, vươn cao…",
            "image" => "images/Hoa_huynh_anh.png"
        ],
        [
            "name" => "  Hoa Păng-xê",
            "description" => "Vào mỗi độ tháng 4 về là dịp mà loài 
            hoa Phăng-xê nở rộ vô cùng đẹp mắt. Hoa còn được gọi tên là hay hoa bướm,
             hoa tử la lan, hoa tương tư,… Păng-xê thường được trồng trong chậu nhỏ, 
             với phần cánh mỏng mượt như nhung, hình dạng cánh bướm mềm mại như đang tung 
             tăng nhảy múa mỗi khi có làn gió thổi qua. Đây cũng là loài hoa tinh tế và sức sống bền bỉ. ",
            "image" => "images/Hoa_Pang_xe.png"
        ],
        [
            "name" => "  Hoa sen",
            "description" => "Khi những tia nắng ấm áp của mùa hè 
            bắt đầu xuất hiện thì cũng là lúc mùa sen lại về trên những cánh đồng bạt ngàn.
             Hoa sen tượng trưng cho vẻ đẹp trắng trong, tao nhã của tâm hồn.
              Hoa có thể được trồng trong chiếc ao vườn nhà, có thể được trồng trong chậu trang trí đều đẹp cả.",
            "image" => "images/Hoa_sen.png"
        ],
        [

            "name" => "  Hoa dừa cạn",
            "description" => "Hoa dừa cạn còn có các tên gọi như trường xuân hoa, 
            dương giác, bông dừa, mỹ miều hơn thì là Hải Đằng. Hoa nở không ngừng từ mùa xuân 
            sang mùa hè cho đến tận mùa thu. Hoa có 3 màu cơ bản là trắng, hồng nhạt và tím nhạt, 
            lá và hoa cùng nhau vươn lên khiến cho khóm dừa cạn tuy nhỏ bé nhưng luôn tràn đầy sức sống. 
            Loài hoa này còn tượng trưng cho sự thành đạt và có khả năng trừ tà.",
            "image" => "images/Hoa_dua_can.png"
        ],
        [

            "name" => "  Hoa sử quân tử",
            "description" => "Sử quân tử là loài cây leo, hoa có cánh nhỏ xinh,
             màu hồng pha trắng hoặc đỏ tươi, mọc thành từng chùm khoe sắc trong nắng sớm,
              rung rinh trong gió. Hoa toát lên một vẻ đẹp vô cùng giản dị kèm theo mùi hương nồng đượm.
               Tuy nhẹ nhàng là thế nhưng sử quân tử lại có khả năng chịu được nắng nóng khắc nghiệt nên có thể trồng trong cả mùa hè.",
            "image" => "images/Hoa_su_quan_tu.png"
        ],
        [
            "name" => "  Cúc lá nho",
            "description" => "Cúc lá nho thuộc họ nhà Cúc, được biết đến với những bông hoa 
            nhiều màu sắc phong phú, tươi sáng: nào là trắng, hồng cho đến tím, xanh dương,…
             và những chiếc lá to với hình dáng răng cưa độc đáo. ",
            "image" => "images/Cuc_la_nho.png"
        ],
        [
            "name" => "  Cẩm tú cầu",
            "description" => "Cẩm tú cầu là loại cây thường mọc thành bụi có hoa nở 
            to thành từng chùm và đặc biệt thích hợp với mùa hè. Hoa ưa ánh nắng mặt 
            trời từ bình minh cho đến khi lặn xuống mỗi chiều tà. Hoa có nhiều màu sắc như trắng,
             tím, hồng, xanh rất nhẹ nhàng. Hoa thích hợp trồng nơi sân vườn rộng rãi hoặc chậu nhỏ để trang trí nhà ở.",
            "image" => "images/Hoa_cam_tu_cau.png"
        ],

        [
            "name" => " Hoa cúc dại",
            "description" => "Với phần thân mảnh mai nhưng luôn vươn lên mạnh mẽ,
             lại chịu được nhiệt độ cao, thậm chí là khi tiết trời hạn hán nên hoa cúc dại
              cực kỳ thích hợp trồng từ mùa xuân cho đến tận mùa hè nắng gắt. Hoa có màu trắng, 
              hồng tươi sáng hay vàng cam nổi bật, không kiêu sa nhưng sức sống bền bỉ.",
            "image" => "images/Hoa_cuc_dai.png"
        ]
    ];
}


function add($name, $description, $image)
{
    $_SESSION['flowers'][] = [
        'name' => $name,
        'description' => $description,
        'image' => $image
    ];
}

// Cập nhật sản phẩm
function updateFlower($index, $newName, $newDescription, $newImage)
{
    if (isset($_SESSION['flowers'][$index])) {
        $_SESSION['flowers'][$index] = [
            'name' => $newName,
            'description' => $newDescription,
            'image' => $newImage ?: $_SESSION['flowers'][$index]['image']
        ];
        return true;
    }
    return false;
}
function deleteFlower($index)
{
    if (isset($_SESSION['flowers'][$index])) {
        array_splice($_SESSION['flowers'], $index, 1);
        return true;
    }
    return false;
}
