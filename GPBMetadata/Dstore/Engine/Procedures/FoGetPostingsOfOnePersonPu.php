<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetPostingsOfOnePerson_Pu.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class FoGetPostingsOfOnePersonPu
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
            "0afb120a3b6473746f72652f656e67696e652f70726f636564757265732f" .
            "666f5f476574506f7374696e67734f664f6e65506572736f6e5f50752e70" .
            "726f746f122a6473746f72652e656e67696e652e666f5f476574506f7374" .
            "696e67734f664f6e65506572736f6e5f50751a136473746f72652f76616c" .
            "7565732e70726f746f1a1a6473746f72652f656e67696e652f656e67696e" .
            "652e70726f746f22ad090a0a506172616d657465727312400a1c70657273" .
            "6f6e5f6964656e74696669636174696f6e5f76616c75657318012001280b" .
            "321a2e6473746f72652e76616c7565732e537472696e6756616c7565122a" .
            "0a21706572736f6e5f6964656e74696669636174696f6e5f76616c756573" .
            "5f6e756c6c18e9072001280812330a0e706572736f6e5f747970655f6964" .
            "18022001280b321b2e6473746f72652e76616c7565732e496e7465676572" .
            "56616c7565121c0a13706572736f6e5f747970655f69645f6e756c6c18ea" .
            "0720012808122d0a09756e697175655f696418032001280b321a2e647374" .
            "6f72652e76616c7565732e537472696e6756616c756512170a0e756e6971" .
            "75655f69645f6e756c6c18eb0720012808122d0a08666f72756d5f696418" .
            "042001280b321b2e6473746f72652e76616c7565732e496e746567657256" .
            "616c756512160a0d666f72756d5f69645f6e756c6c18ec0720012808122e" .
            "0a09706572736f6e5f696418052001280b321b2e6473746f72652e76616c" .
            "7565732e496e746567657256616c756512170a0e706572736f6e5f69645f" .
            "6e756c6c18ed072001280812300a0966726f6d5f6461746518062001280b" .
            "321d2e6473746f72652e76616c7565732e54696d657374616d7056616c75" .
            "6512170a0e66726f6d5f646174655f6e756c6c18ee0720012808122e0a07" .
            "746f5f6461746518072001280b321d2e6473746f72652e76616c7565732e" .
            "54696d657374616d7056616c756512150a0c746f5f646174655f6e756c6c" .
            "18ef072001280812330a0e696e636c7564655f626f646965731808200128" .
            "0b321b2e6473746f72652e76616c7565732e426f6f6c65616e56616c7565" .
            "121c0a13696e636c7564655f626f646965735f6e756c6c18f00720012808" .
            "122e0a09726f775f636f756e7418092001280b321b2e6473746f72652e76" .
            "616c7565732e496e746567657256616c756512170a0e726f775f636f756e" .
            "745f6e756c6c18f10720012808123d0a18696e636c7564655f6164646974" .
            "696f6e616c5f696e666f73180a2001280b321b2e6473746f72652e76616c" .
            "7565732e426f6f6c65616e56616c756512260a1d696e636c7564655f6164" .
            "646974696f6e616c5f696e666f735f6e756c6c18f2072001280812330a0e" .
            "6f726465725f6372697465726961180b2001280b321b2e6473746f72652e" .
            "76616c7565732e496e746567657256616c7565121c0a136f726465725f63" .
            "726974657269615f6e756c6c18f30720012808122f0a0a7669736962696c" .
            "697479180c2001280b321b2e6473746f72652e76616c7565732e496e7465" .
            "67657256616c756512180a0f7669736962696c6974795f6e756c6c18f407" .
            "2001280812420a1d6765745f6f776e5f6e6f745f617070726f7665645f70" .
            "6f7374696e6773180d2001280b321b2e6473746f72652e76616c7565732e" .
            "426f6f6c65616e56616c7565122b0a226765745f6f776e5f6e6f745f6170" .
            "70726f7665645f706f7374696e67735f6e756c6c18f50720012808123b0a" .
            "17736570617261746f725f696e5f6964656e745f76616c73180e2001280b" .
            "321a2e6473746f72652e76616c7565732e537472696e6756616c75651225" .
            "0a1c736570617261746f725f696e5f6964656e745f76616c735f6e756c6c" .
            "18f6072001280822c7070a08526573706f6e736512380a106d6574615f69" .
            "6e666f726d6174696f6e18022003280b321e2e6473746f72652e656e6769" .
            "6e652e4d657461496e666f726d6174696f6e12270a076d65737361676518" .
            "032003280b32162e6473746f72652e656e67696e652e4d65737361676512" .
            "450a03726f7718042003280b32382e6473746f72652e656e67696e652e66" .
            "6f5f476574506f7374696e67734f664f6e65506572736f6e5f50752e5265" .
            "73706f6e73652e526f771a90060a03526f77120f0a06726f775f69641890" .
            "4e20012805122f0a0a736d616c6c5f626f647918914e2001280b321a2e64" .
            "73746f72652e76616c7565732e537472696e6756616c756512350a10655f" .
            "6d61696c5f6f665f617574686f7218924e2001280b321a2e6473746f7265" .
            "2e76616c7565732e537472696e6756616c756512300a0a706f7374696e67" .
            "5f696418934e2001280b321b2e6473746f72652e76616c7565732e496e74" .
            "6567657256616c756512330a0e706f73745f646174655f6368617218944e" .
            "2001280b321a2e6473746f72652e76616c7565732e537472696e6756616c" .
            "7565122e0a08666f72756d5f696418954e2001280b321b2e6473746f7265" .
            "2e76616c7565732e496e746567657256616c756512350a0f6d61696e5f70" .
            "6f7374696e675f696418964e2001280b321b2e6473746f72652e76616c75" .
            "65732e496e746567657256616c7565122d0a0776697369626c6518974e20" .
            "01280b321b2e6473746f72652e76616c7565732e496e746567657256616c" .
            "756512390a137265706c795f746f5f706f7374696e675f696418984e2001" .
            "280b321b2e6473746f72652e76616c7565732e496e746567657256616c75" .
            "65122b0a06617574686f7218994e2001280b321a2e6473746f72652e7661" .
            "6c7565732e537472696e6756616c756512310a09706f73745f6461746518" .
            "9a4e2001280b321d2e6473746f72652e76616c7565732e54696d65737461" .
            "6d7056616c756512290a04626f6479189b4e2001280b321a2e6473746f72" .
            "652e76616c7565732e537472696e6756616c7565122c0a077375626a6563" .
            "74189c4e2001280b321a2e6473746f72652e76616c7565732e537472696e" .
            "6756616c756512330a0c616c72656164795f7265616418a19c012001280b" .
            "321b2e6473746f72652e76616c7565732e426f6f6c65616e56616c756512" .
            "330a0c6861735f62696e617269657318aa9c012001280b321b2e6473746f" .
            "72652e76616c7565732e426f6f6c65616e56616c756512350a0e6861735f" .
            "737563636573736f727318ad9c012001280b321b2e6473746f72652e7661" .
            "6c7565732e426f6f6c65616e56616c7565425d0a1b696f2e6473746f7265" .
            "2e656e67696e652e70726f636564757265735a3e676f73646b2e6473746f" .
            "72652e64652f656e67696e652f70726f636564757265732f666f5f476574" .
            "506f7374696e67734f664f6e65506572736f6e5f5075620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
