<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetDSS_Index_Trend_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class StGetDSSIndexTrendAd
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Dstore\Values::initOnce();
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac2110a376473746f72652f656e67696e652f70726f636564757265732f" .
            "73745f4765744453535f496e6465785f5472656e645f41642e70726f746f" .
            "12266473746f72652e656e67696e652e73745f4765744453535f496e6465" .
            "785f5472656e645f41641a136473746f72652f76616c7565732e70726f74" .
            "6f1a1a6473746f72652f656e67696e652f656e67696e652e70726f746f22" .
            "e00a0a0a506172616d657465727312380a13646f6d61696e5f747265655f" .
            "6e6f64655f696418012001280b321b2e6473746f72652e76616c7565732e" .
            "496e746567657256616c756512210a18646f6d61696e5f747265655f6e6f" .
            "64655f69645f6e756c6c18e90720012808122f0a0a696e74657276616c6c" .
            "7318022001280b321b2e6473746f72652e76616c7565732e496e74656765" .
            "7256616c756512180a0f696e74657276616c6c735f6e756c6c18ea072001" .
            "2808123a0a156d696e757465735f7065725f696e74657276616c6c180320" .
            "01280b321b2e6473746f72652e76616c7565732e496e746567657256616c" .
            "756512230a1a6d696e757465735f7065725f696e74657276616c6c5f6e75" .
            "6c6c18eb0720012808123c0a1767726f75705f62795f6e6f6465735f6f6e" .
            "5f6c6576656c18042001280b321b2e6473746f72652e76616c7565732e49" .
            "6e746567657256616c756512250a1c67726f75705f62795f6e6f6465735f" .
            "6f6e5f6c6576656c5f6e756c6c18ec072001280812300a0b69735f6c6576" .
            "656c5f696418052001280b321b2e6473746f72652e76616c7565732e426f" .
            "6f6c65616e56616c756512190a1069735f6c6576656c5f69645f6e756c6c" .
            "18ed072001280812440a1f67726f75705f62795f6e6f64655f6368617261" .
            "6374657269737469635f696418062001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c7565122d0a2467726f75705f62795f" .
            "6e6f64655f63686172616374657269737469635f69645f6e756c6c18ee07" .
            "20012808123a0a156f6e6c795f76616c7565735f696e5f6f6e655f696418" .
            "072001280b321b2e6473746f72652e76616c7565732e426f6f6c65616e56" .
            "616c756512230a1a6f6e6c795f76616c7565735f696e5f6f6e655f69645f" .
            "6e756c6c18ef072001280812440a1f6964735f696e5f6f6e655f69645f61" .
            "72655f747265655f6e6f64655f69647318082001280b321b2e6473746f72" .
            "652e76616c7565732e426f6f6c65616e56616c7565122d0a246964735f69" .
            "6e5f6f6e655f69645f6172655f747265655f6e6f64655f6964735f6e756c" .
            "6c18f0072001280812310a0c7765696768745f766965777318092001280b" .
            "321b2e6473746f72652e76616c7565732e446563696d616c56616c756512" .
            "1a0a117765696768745f76696577735f6e756c6c18f10720012808123b0a" .
            "167765696768745f627579696e675f696e746572657374180a2001280b32" .
            "1b2e6473746f72652e76616c7565732e446563696d616c56616c75651224" .
            "0a1b7765696768745f627579696e675f696e7465726573745f6e756c6c18" .
            "f2072001280812310a0c7765696768745f6f72646572180b2001280b321b" .
            "2e6473746f72652e76616c7565732e446563696d616c56616c7565121a0a" .
            "117765696768745f6f726465725f6e756c6c18f30720012808123e0a1969" .
            "6e636c7564655f64656163746976617465645f6e6f646573180c2001280b" .
            "321b2e6473746f72652e76616c7565732e426f6f6c65616e56616c756512" .
            "270a1e696e636c7564655f64656163746976617465645f6e6f6465735f6e" .
            "756c6c18f4072001280812470a22696e636c7564655f6e6f6465735f7769" .
            "74686f75745f747265655f6e6f64655f6964180d2001280b321b2e647374" .
            "6f72652e76616c7565732e426f6f6c65616e56616c756512300a27696e63" .
            "6c7564655f6e6f6465735f776974686f75745f747265655f6e6f64655f69" .
            "645f6e756c6c18f50720012808123e0a196f726465725f726573756c745f" .
            "62795f696e74657276616c6c180e2001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c756512270a1e6f726465725f726573" .
            "756c745f62795f696e74657276616c6c5f6e756c6c18f6072001280822e7" .
            "040a08526573706f6e736512380a106d6574615f696e666f726d6174696f" .
            "6e18022003280b321e2e6473746f72652e656e67696e652e4d657461496e" .
            "666f726d6174696f6e12270a076d65737361676518032003280b32162e64" .
            "73746f72652e656e67696e652e4d65737361676512410a03726f77180420" .
            "03280b32342e6473746f72652e656e67696e652e73745f4765744453535f" .
            "496e6465785f5472656e645f41642e526573706f6e73652e526f771ab403" .
            "0a03526f77120f0a06726f775f696418904e2001280512370a0f696e7465" .
            "7276616c6c5f737461727418914e2001280b321d2e6473746f72652e7661" .
            "6c7565732e54696d657374616d7056616c7565122c0a066f726465727318" .
            "924e2001280b321b2e6473746f72652e76616c7565732e446563696d616c" .
            "56616c756512310a0b765f625f6f5f696e64657818934e2001280b321b2e" .
            "6473746f72652e76616c7565732e446563696d616c56616c756512310a0b" .
            "7472656e645f6f665f696418944e2001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c7565122b0a05766965777318954e20" .
            "01280b321b2e6473746f72652e76616c7565732e446563696d616c56616c" .
            "756512390a147472656e645f6f665f6465736372697074696f6e18964e20" .
            "01280b321a2e6473746f72652e76616c7565732e537472696e6756616c75" .
            "65122f0a09696e74657276616c6c18974e2001280b321b2e6473746f7265" .
            "2e76616c7565732e496e746567657256616c756512360a10627579696e67" .
            "5f696e7465726573747318984e2001280b321b2e6473746f72652e76616c" .
            "7565732e446563696d616c56616c756542590a1b696f2e6473746f72652e" .
            "656e67696e652e70726f636564757265735a3a676f73646b2e6473746f72" .
            "652e64652f656e67696e652f70726f636564757265732f73745f47657444" .
            "53535f496e6465785f5472656e645f4164620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
