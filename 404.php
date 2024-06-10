<style>
    * {
        transition: all 0.6s;
        overflow: hidden;
    }

    #main {
        display: table;
        width: 100%;
        height: 100vh;
        text-align: center;
    }

    .fof {
        display: table-cell;
        vertical-align: middle;
    }

    .fof h1 {
        font-size: 50px;
        display: inline-block;
        padding-right: 12px;
        animation: type 0.5s alternate infinite;
    }

    @keyframes type {
        from {
            box-shadow: inset -3px 0px 0px #888;
        }

        to {
            box-shadow: inset -3px 0px 0px transparent;
        }
    }
</style>
<div id="main">
    <div class="fof">
        <h1>Tidak Ditemukan</h1>
    </div>
</div>