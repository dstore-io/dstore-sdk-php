<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetProcedureNames_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class DoGetProcedureNamesAd
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
            "0ae50d0a366473746f72652f656e67696e652f70726f636564757265732f" .
            "646f5f47657450726f6365647572654e616d65735f41642e70726f746f12" .
            "256473746f72652e656e67696e652e646f5f47657450726f636564757265" .
            "4e616d65735f41641a136473746f72652f76616c7565732e70726f746f1a" .
            "1a6473746f72652f656e67696e652f656e67696e652e70726f746f22d703" .
            "0a0a506172616d6574657273123a0a1570726f6365647572655f63617465" .
            "676f72795f696418012001280b321b2e6473746f72652e76616c7565732e" .
            "496e746567657256616c756512230a1a70726f6365647572655f63617465" .
            "676f72795f69645f6e756c6c18e9072001280812360a1170726f63656475" .
            "72655f747970655f696418022001280b321b2e6473746f72652e76616c75" .
            "65732e496e746567657256616c7565121f0a1670726f6365647572655f74" .
            "7970655f69645f6e756c6c18ea072001280812320a0e61637475616c5f76" .
            "657273696f6e18032001280b321a2e6473746f72652e76616c7565732e53" .
            "7472696e6756616c7565121c0a1361637475616c5f76657273696f6e5f6e" .
            "756c6c18eb072001280812320a0e70726f6365647572655f6e616d651804" .
            "2001280b321a2e6473746f72652e76616c7565732e537472696e6756616c" .
            "7565121c0a1370726f6365647572655f6e616d655f6e756c6c18ec072001" .
            "280812400a1b6765745f70726f63735f776974685f6d697373696e675f64" .
            "6f637518052001280b321b2e6473746f72652e76616c7565732e426f6f6c" .
            "65616e56616c756512290a206765745f70726f63735f776974685f6d6973" .
            "73696e675f646f63755f6e756c6c18ed07200128082296080a0852657370" .
            "6f6e736512380a106d6574615f696e666f726d6174696f6e18022003280b" .
            "321e2e6473746f72652e656e67696e652e4d657461496e666f726d617469" .
            "6f6e12270a076d65737361676518032003280b32162e6473746f72652e65" .
            "6e67696e652e4d65737361676512400a03726f7718042003280b32332e64" .
            "73746f72652e656e67696e652e646f5f47657450726f6365647572654e61" .
            "6d65735f41642e526573706f6e73652e526f771ae4060a03526f77120f0a" .
            "06726f775f696418904e2001280512330a0e70726f6365647572655f7479" .
            "706518914e2001280b321a2e6473746f72652e76616c7565732e53747269" .
            "6e6756616c7565123b0a1570726f6365647572655f63617465676f72795f" .
            "696418924e2001280b321b2e6473746f72652e76616c7565732e496e7465" .
            "67657256616c756512370a1270726f6365647572655f66756e6374696f6e" .
            "18934e2001280b321a2e6473746f72652e76616c7565732e537472696e67" .
            "56616c756512370a1270726f6365647572655f63617465676f727918944e" .
            "2001280b321a2e6473746f72652e76616c7565732e537472696e6756616c" .
            "756512390a1461637475616c6473746f72655f76657273696f6e18954e20" .
            "01280b321a2e6473746f72652e76616c7565732e537472696e6756616c75" .
            "6512370a1170726f6365647572655f747970655f696418964e2001280b32" .
            "1b2e6473746f72652e76616c7565732e496e746567657256616c75651238" .
            "0a136c6173745f6564697465645f61745f6368617218974e2001280b321a" .
            "2e6473746f72652e76616c7565732e537472696e6756616c756512330a0e" .
            "70726f6365647572655f6e616d6518984e2001280b321a2e6473746f7265" .
            "2e76616c7565732e537472696e6756616c756512380a1366697273746473" .
            "746f72655f76657273696f6e18994e2001280b321a2e6473746f72652e76" .
            "616c7565732e537472696e6756616c7565122b0a06617574686f72189a4e" .
            "2001280b321a2e6473746f72652e76616c7565732e537472696e6756616c" .
            "7565123a0a1566697273745f637265617465645f61745f63686172189b4e" .
            "2001280b321a2e6473746f72652e76616c7565732e537472696e6756616c" .
            "756512390a14616c6961735f70726f6365647572655f6e616d65189c4e20" .
            "01280b321a2e6473746f72652e76616c7565732e537472696e6756616c75" .
            "6512390a13726567697374657265645f666f725f646f6375189d4e200128" .
            "0b321b2e6473746f72652e76616c7565732e426f6f6c65616e56616c7565" .
            "12390a146c6173745f637265617465645f61745f63686172189e4e200128" .
            "0b321a2e6473746f72652e76616c7565732e537472696e6756616c756512" .
            "310a0b646f63755f657869737473189f4e2001280b321b2e6473746f7265" .
            "2e76616c7565732e426f6f6c65616e56616c756542580a1b696f2e647374" .
            "6f72652e656e67696e652e70726f636564757265735a39676f73646b2e64" .
            "73746f72652e64652f656e67696e652f70726f636564757265732f646f5f" .
            "47657450726f6365647572654e616d65735f4164620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
