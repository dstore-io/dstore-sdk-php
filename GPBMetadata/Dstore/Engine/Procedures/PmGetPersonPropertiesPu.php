<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonProperties_Pu.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class PmGetPersonPropertiesPu
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
            "0ab6130a386473746f72652f656e67696e652f70726f636564757265732f" .
            "706d5f476574506572736f6e50726f706572746965735f50752e70726f74" .
            "6f12276473746f72652e656e67696e652e706d5f476574506572736f6e50" .
            "726f706572746965735f50751a136473746f72652f76616c7565732e7072" .
            "6f746f1a1a6473746f72652f656e67696e652f656e67696e652e70726f74" .
            "6f2289090a0a506172616d657465727312320a0d736f727465645f726573" .
            "756c7418012001280b321b2e6473746f72652e76616c7565732e426f6f6c" .
            "65616e56616c7565121b0a12736f727465645f726573756c745f6e756c6c" .
            "18e9072001280812460a21696e636c7564655f706572736f6e5f63686172" .
            "61635f63617465676f72795f696418022001280b321b2e6473746f72652e" .
            "76616c7565732e426f6f6c65616e56616c7565122f0a26696e636c756465" .
            "5f706572736f6e5f6368617261635f63617465676f72795f69645f6e756c" .
            "6c18ea072001280812330a0f696e7075745f706172616d65746572180320" .
            "01280b321a2e6473746f72652e76616c7565732e537472696e6756616c75" .
            "65121d0a14696e7075745f706172616d657465725f6e756c6c18eb072001" .
            "280812370a12696e7075745f69735f756e697175655f696418042001280b" .
            "321b2e6473746f72652e76616c7565732e496e746567657256616c756512" .
            "200a17696e7075745f69735f756e697175655f69645f6e756c6c18ec0720" .
            "01280812330a0e706572736f6e5f747970655f696418052001280b321b2e" .
            "6473746f72652e76616c7565732e496e746567657256616c7565121c0a13" .
            "706572736f6e5f747970655f69645f6e756c6c18ed072001280812300a0b" .
            "6c616e67756167655f696418062001280b321b2e6473746f72652e76616c" .
            "7565732e496e746567657256616c756512190a106c616e67756167655f69" .
            "645f6e756c6c18ee0720012808123a0a1663686172616374657269737469" .
            "635f69645f6c69737418072001280b321a2e6473746f72652e76616c7565" .
            "732e537472696e6756616c756512240a1b63686172616374657269737469" .
            "635f69645f6c6973745f6e756c6c18ef0720012808122f0a0b646174655f" .
            "666f726d617418082001280b321a2e6473746f72652e76616c7565732e53" .
            "7472696e6756616c756512190a10646174655f666f726d61745f6e756c6c" .
            "18f0072001280812330a0e636173655f73656e7369746976651809200128" .
            "0b321b2e6473746f72652e76616c7565732e426f6f6c65616e56616c7565" .
            "121c0a13636173655f73656e7369746976655f6e756c6c18f10720012808" .
            "122e0a09706572736f6e5f6964180a2001280b321b2e6473746f72652e76" .
            "616c7565732e496e746567657256616c756512170a0e706572736f6e5f69" .
            "645f6e756c6c18f2072001280812340a0d646174655f616e645f74696d65" .
            "180b2001280b321d2e6473746f72652e76616c7565732e54696d65737461" .
            "6d7056616c7565121b0a12646174655f616e645f74696d655f6e756c6c18" .
            "f30720012808123a0a156765745f61637475616c5f70726f706572746965" .
            "73180c2001280b321b2e6473746f72652e76616c7565732e426f6f6c6561" .
            "6e56616c756512230a1a6765745f61637475616c5f70726f706572746965" .
            "735f6e756c6c18f40720012808123c0a18736570617261746f725f666f72" .
            "5f6964656e745f76616c73180d2001280b321a2e6473746f72652e76616c" .
            "7565732e537472696e6756616c756512260a1d736570617261746f725f66" .
            "6f725f6964656e745f76616c735f6e756c6c18f5072001280822af080a08" .
            "526573706f6e736512380a106d6574615f696e666f726d6174696f6e1802" .
            "2003280b321e2e6473746f72652e656e67696e652e4d657461496e666f72" .
            "6d6174696f6e12270a076d65737361676518032003280b32162e6473746f" .
            "72652e656e67696e652e4d65737361676512420a03726f7718042003280b" .
            "32352e6473746f72652e656e67696e652e706d5f476574506572736f6e50" .
            "726f706572746965735f50752e526573706f6e73652e526f771afb060a03" .
            "526f77120f0a06726f775f696418904e2001280512400a1b76616c75655f" .
            "726573747269637465645f62795f7061747465726e18914e2001280b321a" .
            "2e6473746f72652e76616c7565732e537472696e6756616c7565123f0a1a" .
            "63686172616374657269737469635f6465736372697074696f6e18924e20" .
            "01280b321a2e6473746f72652e76616c7565732e537472696e6756616c75" .
            "6512330a0d6669656c645f747970655f696418934e2001280b321b2e6473" .
            "746f72652e76616c7565732e496e746567657256616c756512370a116368" .
            "6172616374657269737469635f696418944e2001280b321b2e6473746f72" .
            "652e76616c7565732e496e746567657256616c7565122e0a0876616c7565" .
            "5f696418954e2001280b321b2e6473746f72652e76616c7565732e496e74" .
            "6567657256616c7565122c0a066d6f6469667918964e2001280b321b2e64" .
            "73746f72652e76616c7565732e496e746567657256616c756512300a0a6d" .
            "61785f6c656e67746818974e2001280b321b2e6473746f72652e76616c75" .
            "65732e496e746567657256616c756512370a11707265646566696e65645f" .
            "76616c75657318984e2001280b321b2e6473746f72652e76616c7565732e" .
            "426f6f6c65616e56616c7565123f0a19706572736f6e5f6368617261635f" .
            "63617465676f72795f696418994e2001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c756512440a1f726561645f61636365" .
            "73735f7265737472696374696f6e5f7061747465726e189a4e2001280b32" .
            "1a2e6473746f72652e76616c7565732e537472696e6756616c7565122f0a" .
            "09706572736f6e5f6964189b4e2001280b321b2e6473746f72652e76616c" .
            "7565732e496e746567657256616c7565122e0a087265717569726564189c" .
            "4e2001280b321b2e6473746f72652e76616c7565732e426f6f6c65616e56" .
            "616c756512310a0c61637475616c5f76616c7565189d4e2001280b321a2e" .
            "6473746f72652e76616c7565732e537472696e6756616c7565122a0a0576" .
            "616c7565189e4e2001280b321a2e6473746f72652e76616c7565732e5374" .
            "72696e6756616c7565122d0a0776697369626c65189f4e2001280b321b2e" .
            "6473746f72652e76616c7565732e426f6f6c65616e56616c756512330a0b" .
            "6c6173745f65646974656418a04e2001280b321d2e6473746f72652e7661" .
            "6c7565732e54696d657374616d7056616c7565425a0a1b696f2e6473746f" .
            "72652e656e67696e652e70726f636564757265735a3b676f73646b2e6473" .
            "746f72652e64652f656e67696e652f70726f636564757265732f706d5f47" .
            "6574506572736f6e50726f706572746965735f5075620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
