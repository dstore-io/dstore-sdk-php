<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTabsRefInOtherTabs_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class MiGetTabsRefInOtherTabsAd
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
            "0ab3100a3a6473746f72652f656e67696e652f70726f636564757265732f" .
            "6d695f47657454616273526566496e4f74686572546162735f41642e7072" .
            "6f746f12296473746f72652e656e67696e652e6d695f4765745461627352" .
            "6566496e4f74686572546162735f41641a136473746f72652f76616c7565" .
            "732e70726f746f1a1a6473746f72652f656e67696e652f656e67696e652e" .
            "70726f746f22b1070a0a506172616d6574657273122d0a087461626c655f" .
            "696418012001280b321b2e6473746f72652e76616c7565732e496e746567" .
            "657256616c756512160a0d7461626c655f69645f6e756c6c18e907200128" .
            "0812390a14757365645f696e5f7365617263685f6974656d731802200128" .
            "0b321b2e6473746f72652e76616c7565732e496e746567657256616c7565" .
            "12220a19757365645f696e5f7365617263685f6974656d735f6e756c6c18" .
            "ea0720012808123e0a19757365645f696e5f7365617263685f6974656d5f" .
            "6c61636b7318032001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c756512270a1e757365645f696e5f7365617263685f69" .
            "74656d5f6c61636b735f6e756c6c18eb0720012808123a0a15757365645f" .
            "696e5f726174696e675f76616c75657318042001280b321b2e6473746f72" .
            "652e76616c7565732e496e746567657256616c756512230a1a757365645f" .
            "696e5f726174696e675f76616c7565735f6e756c6c18ec0720012808123c" .
            "0a17757365645f696e5f726174696e675f7375626a656374731805200128" .
            "0b321b2e6473746f72652e76616c7565732e496e746567657256616c7565" .
            "12250a1c757365645f696e5f726174696e675f7375626a656374735f6e75" .
            "6c6c18ed072001280812430a1e757365645f696e5f6d6574615f696e666f" .
            "726d6174696f6e5f747970657318062001280b321b2e6473746f72652e76" .
            "616c7565732e496e746567657256616c7565122c0a23757365645f696e5f" .
            "6d6574615f696e666f726d6174696f6e5f74797065735f6e756c6c18ee07" .
            "2001280812450a20757365645f696e5f706572736f6e5f6368617261635f" .
            "76616c75655f7265667318072001280b321b2e6473746f72652e76616c75" .
            "65732e496e746567657256616c7565122e0a25757365645f696e5f706572" .
            "736f6e5f6368617261635f76616c75655f726566735f6e756c6c18ef0720" .
            "01280812440a1f757365645f696e5f707265646566696e65645f62696c6c" .
            "5f636f6e74656e7418082001280b321b2e6473746f72652e76616c756573" .
            "2e496e746567657256616c7565122d0a24757365645f696e5f7072656465" .
            "66696e65645f62696c6c5f636f6e74656e745f6e756c6c18f00720012808" .
            "12420a1d757365645f696e5f636173685f6163635f7472616e7361637469" .
            "6f6e7318092001280b321b2e6473746f72652e76616c7565732e496e7465" .
            "67657256616c7565122b0a22757365645f696e5f636173685f6163635f74" .
            "72616e73616374696f6e735f6e756c6c18f1072001280822fe060a085265" .
            "73706f6e736512380a106d6574615f696e666f726d6174696f6e18022003" .
            "280b321e2e6473746f72652e656e67696e652e4d657461496e666f726d61" .
            "74696f6e12270a076d65737361676518032003280b32162e6473746f7265" .
            "2e656e67696e652e4d65737361676512440a03726f7718042003280b3237" .
            "2e6473746f72652e656e67696e652e6d695f47657454616273526566496e" .
            "4f74686572546162735f41642e526573706f6e73652e526f771ac8050a03" .
            "526f77120f0a06726f775f696418904e20012805122e0a087461626c655f" .
            "696418914e2001280b321b2e6473746f72652e76616c7565732e496e7465" .
            "67657256616c7565123f0a19757365645f696e5f7365617263685f697465" .
            "6d5f6c61636b7318924e2001280b321b2e6473746f72652e76616c756573" .
            "2e426f6f6c65616e56616c7565123b0a15757365645f696e5f726174696e" .
            "675f76616c75657318934e2001280b321b2e6473746f72652e76616c7565" .
            "732e426f6f6c65616e56616c756512450a1f757365645f696e5f70726564" .
            "6566696e65645f62696c6c5f636f6e74656e7418944e2001280b321b2e64" .
            "73746f72652e76616c7565732e426f6f6c65616e56616c7565122f0a0a74" .
            "61626c655f6e616d6518954e2001280b321a2e6473746f72652e76616c75" .
            "65732e537472696e6756616c7565123c0a177072696d6172795f6b65795f" .
            "636f6c756d6e5f6e616d6518964e2001280b321a2e6473746f72652e7661" .
            "6c7565732e537472696e6756616c7565123a0a14757365645f696e5f7365" .
            "617263685f6974656d7318974e2001280b321b2e6473746f72652e76616c" .
            "7565732e426f6f6c65616e56616c756512460a20757365645f696e5f7065" .
            "72736f6e5f6368617261635f76616c75655f7265667318984e2001280b32" .
            "1b2e6473746f72652e76616c7565732e426f6f6c65616e56616c75651244" .
            "0a1e757365645f696e5f6d6574615f696e666f726d6174696f6e5f747970" .
            "657318994e2001280b321b2e6473746f72652e76616c7565732e426f6f6c" .
            "65616e56616c7565123d0a17757365645f696e5f726174696e675f737562" .
            "6a65637473189a4e2001280b321b2e6473746f72652e76616c7565732e42" .
            "6f6f6c65616e56616c756512430a1d757365645f696e5f636173685f6163" .
            "635f7472616e73616374696f6e73189b4e2001280b321b2e6473746f7265" .
            "2e76616c7565732e426f6f6c65616e56616c7565425c0a1b696f2e647374" .
            "6f72652e656e67696e652e70726f636564757265735a3d676f73646b2e64" .
            "73746f72652e64652f656e67696e652f70726f636564757265732f6d695f" .
            "47657454616273526566496e4f74686572546162735f4164620670726f74" .
            "6f33"
        ));

        static::$is_initialized = true;
    }
}
