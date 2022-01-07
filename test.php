<!DOCTYPE html>
<html>

<head>
    <title>Modal</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        .modal {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
            display: none;
        }

        .modal-content {
            background: #fff;
            margin-top: 100px;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            padding: 8px 24px;
            border-radius: 4px;
            z-index: 4;
        }

        .modal-header {
            font-weight: 500;
            padding: 10px 0;
            font-size: 24px;
        }

        .modal-header .modal-close {
            float: right;
            font-size: 20px;
        }

        .modal-body {
            color: #7b7b7b;
            padding: 15px 0;
        }
    </style>
</head>

<body>
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/u9Mv98Gr5pY title=" YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/-FmWuCgJmxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    <button class="slideshow-item-button" data-modal="modal1">open modal 1</button>
    <button class="modal-open" data-modal="modal2">open modal 2</button>
    <button class="modal-open" data-modal="modal3">open modal 3</button>
    <div class="modal" id="modal1">
        <div class="modal-content">
            <div class="modal-header">
                Heading
                <button class="modal-close" data-dismiss="modal1">close</button>
            </div>
            <div class="modal-body">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-FmWuCgJmxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="modal" id="modal2">
        <div class="modal-content">
            <div class="modal-header">
                Heading
                <button class="modal-close" data-dismiss="modal2">close</button>
            </div>
            <div class="modal-body">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ND7VFJW9oco" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="modal" id="modal3">
        <div class="modal-content">
            <div class="modal-header">
                Heading
                <button class="modal-close" data-dismiss="modal">close</button>
            </div>
            <div class="modal-body">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/nxIOd1yDyVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var modalBtns = document.querySelectorAll(".slideshow-item-button");

        modalBtns.forEach(function(btn) {
            btn.onclick = function() {
                var modal = btn.getAttribute("data-modal");
                document.getElementById(modal).style.display = 'block';
            };
        });

        var closeBtns = document.querySelectorAll(".modal-close");

        closeBtns.forEach(function(btn) {
            btn.onclick = function() {
                var modal = (btn.closest(".modal").style.display = "none");
            }
        });

        window.onclick = function(e) {
            if (e.target.classList.contains('modal')) {
                e.target.style.display = 'none';
            }
        };
    </script>
</body>

</html>