<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_SearchProductTreeNodes_Pu.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class ImSearchProductTreeNodesPu
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
            "0a97190a3b6473746f72652f656e67696e652f70726f636564757265732f" .
            "696d5f53656172636850726f64756374547265654e6f6465735f50752e70" .
            "726f746f122a6473746f72652e656e67696e652e696d5f53656172636850" .
            "726f64756374547265654e6f6465735f50751a136473746f72652f76616c" .
            "7565732e70726f746f1a1a6473746f72652f656e67696e652f656e67696e" .
            "652e70726f746f228c100a0a506172616d657465727312380a13646f6d61" .
            "696e5f747265655f6e6f64655f696418012001280b321b2e6473746f7265" .
            "2e76616c7565732e496e746567657256616c756512210a18646f6d61696e" .
            "5f747265655f6e6f64655f69645f6e756c6c18e90720012808123b0a176e" .
            "6f64655f63686172616374657269737469635f69647318022001280b321a" .
            "2e6473746f72652e76616c7565732e537472696e6756616c756512250a1c" .
            "6e6f64655f63686172616374657269737469635f6964735f6e756c6c18ea" .
            "072001280812290a0576616c756518032001280b321a2e6473746f72652e" .
            "76616c7565732e537472696e6756616c756512130a0a76616c75655f6e75" .
            "6c6c18eb0720012808122c0a0769735f6c696b6518042001280b321b2e64" .
            "73746f72652e76616c7565732e426f6f6c65616e56616c756512150a0c69" .
            "735f6c696b655f6e756c6c18ec072001280812360a11696e636c7564655f" .
            "696e6865726974656418052001280b321b2e6473746f72652e76616c7565" .
            "732e426f6f6c65616e56616c7565121f0a16696e636c7564655f696e6865" .
            "72697465645f6e756c6c18ed072001280812340a0f73746172745f61745f" .
            "726f775f6e6f18062001280b321b2e6473746f72652e76616c7565732e49" .
            "6e746567657256616c7565121d0a1473746172745f61745f726f775f6e6f" .
            "5f6e756c6c18ee0720012808122e0a09726f775f636f756e741807200128" .
            "0b321b2e6473746f72652e76616c7565732e496e746567657256616c7565" .
            "12170a0e726f775f636f756e745f6e756c6c18ef0720012808123a0a1569" .
            "6e636c7564655f76616c75655f64657461696c7318082001280b321b2e64" .
            "73746f72652e76616c7565732e426f6f6c65616e56616c756512230a1a69" .
            "6e636c7564655f76616c75655f64657461696c735f6e756c6c18f0072001" .
            "280812350a10696e636c7564655f76617269616e747318092001280b321b" .
            "2e6473746f72652e76616c7565732e426f6f6c65616e56616c7565121e0a" .
            "15696e636c7564655f76617269616e74735f6e756c6c18f1072001280812" .
            "3f0a1a6d61696e7461696e5f7365617263685f6974656d5f6c61636b7318" .
            "0a2001280b321b2e6473746f72652e76616c7565732e426f6f6c65616e56" .
            "616c756512280a1f6d61696e7461696e5f7365617263685f6974656d5f6c" .
            "61636b735f6e756c6c18f2072001280812430a1e62696e6172795f636861" .
            "72616374657269737469635f76616c75655f6964180b2001280b321b2e64" .
            "73746f72652e76616c7565732e496e746567657256616c7565122c0a2362" .
            "696e6172795f63686172616374657269737469635f76616c75655f69645f" .
            "6e756c6c18f3072001280812400a1b66696c7465725f62795f6368617261" .
            "6374657269737469635f6964180c2001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c756512290a2066696c7465725f6279" .
            "5f63686172616374657269737469635f69645f6e756c6c18f40720012808" .
            "123a0a1666696c7465725f62795f6368617261635f76616c7565180d2001" .
            "280b321a2e6473746f72652e76616c7565732e537472696e6756616c7565" .
            "12240a1b66696c7465725f62795f6368617261635f76616c75655f6e756c" .
            "6c18f50720012808122b0a07636f756e747279180e2001280b321a2e6473" .
            "746f72652e76616c7565732e537472696e6756616c756512150a0c636f75" .
            "6e7472795f6e756c6c18f60720012808123c0a176e65676174655f66696c" .
            "7465725f62795f706172616d73180f2001280b321b2e6473746f72652e76" .
            "616c7565732e426f6f6c65616e56616c756512250a1c6e65676174655f66" .
            "696c7465725f62795f706172616d735f6e756c6c18f70720012808122a0a" .
            "05636f756e7418102001280b321b2e6473746f72652e76616c7565732e49" .
            "6e746567657256616c756512130a0a636f756e745f6e756c6c18f8072001" .
            "280812420a1e736f72745f62795f63686172616374657269737469635f69" .
            "645f6c69737418112001280b321a2e6473746f72652e76616c7565732e53" .
            "7472696e6756616c7565122c0a23736f72745f62795f6368617261637465" .
            "7269737469635f69645f6c6973745f6e756c6c18f9072001280812340a10" .
            "736f72745f6f7074696f6e5f6c69737418122001280b321a2e6473746f72" .
            "652e76616c7565732e537472696e6756616c7565121e0a15736f72745f6f" .
            "7074696f6e5f6c6973745f6e756c6c18fa0720012808123d0a19696e6865" .
            "7269745f64657074685f6f7074696f6e5f6c69737418132001280b321a2e" .
            "6473746f72652e76616c7565732e537472696e6756616c756512270a1e69" .
            "6e68657269745f64657074685f6f7074696f6e5f6c6973745f6e756c6c18" .
            "fb072001280812440a207265637572736976655f6576616c756174696f6e" .
            "5f6f7074696f6e5f6c69737418142001280b321a2e6473746f72652e7661" .
            "6c7565732e537472696e6756616c7565122e0a257265637572736976655f" .
            "6576616c756174696f6e5f6f7074696f6e5f6c6973745f6e756c6c18fc07" .
            "2001280812430a1e6765745f76616c7565735f666f725f736f72745f6279" .
            "5f6368617261637318152001280b321b2e6473746f72652e76616c756573" .
            "2e426f6f6c65616e56616c7565122c0a236765745f76616c7565735f666f" .
            "725f736f72745f62795f636861726163735f6e756c6c18fd072001280812" .
            "370a126f75747075745f696e746f5f6f6e655f696418162001280b321b2e" .
            "6473746f72652e76616c7565732e496e746567657256616c756512200a17" .
            "6f75747075745f696e746f5f6f6e655f69645f6e756c6c18fe0720012808" .
            "2284070a08526573706f6e736512380a106d6574615f696e666f726d6174" .
            "696f6e18022003280b321e2e6473746f72652e656e67696e652e4d657461" .
            "496e666f726d6174696f6e12270a076d65737361676518032003280b3216" .
            "2e6473746f72652e656e67696e652e4d65737361676512450a03726f7718" .
            "042003280b32382e6473746f72652e656e67696e652e696d5f5365617263" .
            "6850726f64756374547265654e6f6465735f50752e526573706f6e73652e" .
            "526f77122a0a05636f756e7418652001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c75651aa1050a03526f77120f0a0672" .
            "6f775f696418904e20012805122b0a0676616c75653218914e2001280b32" .
            "1a2e6473746f72652e76616c7565732e537472696e6756616c7565122b0a" .
            "0676616c75653318924e2001280b321a2e6473746f72652e76616c756573" .
            "2e537472696e6756616c7565122b0a0676616c75653118934e2001280b32" .
            "1a2e6473746f72652e76616c7565732e537472696e6756616c756512330a" .
            "0e6d61746368696e675f76616c756518944e2001280b321a2e6473746f72" .
            "652e76616c7565732e537472696e6756616c756512340a0e62696e617279" .
            "5f636f64655f696418954e2001280b321b2e6473746f72652e76616c7565" .
            "732e496e746567657256616c756512320a0c747265655f6e6f64655f6964" .
            "18964e2001280b321b2e6473746f72652e76616c7565732e496e74656765" .
            "7256616c7565122d0a076e6f64655f696418974e2001280b321b2e647374" .
            "6f72652e76616c7565732e496e746567657256616c756512410a1c707265" .
            "5f7072656465636573736f72735f6465736372697074696f6e18984e2001" .
            "280b321a2e6473746f72652e76616c7565732e537472696e6756616c7565" .
            "122c0a0770726f6475637418994e2001280b321a2e6473746f72652e7661" .
            "6c7565732e537472696e6756616c756512430a1d7072655f707265646563" .
            "6573736f72735f747265655f6e6f64655f6964189a4e2001280b321b2e64" .
            "73746f72652e76616c7565732e496e746567657256616c7565123f0a1970" .
            "72656465636573736f72735f747265655f6e6f64655f6964189b4e200128" .
            "0b321b2e6473746f72652e76616c7565732e496e746567657256616c7565" .
            "123d0a187072656465636573736f72735f6465736372697074696f6e189c" .
            "4e2001280b321a2e6473746f72652e76616c7565732e537472696e675661" .
            "6c7565425d0a1b696f2e6473746f72652e656e67696e652e70726f636564" .
            "757265735a3e676f73646b2e6473746f72652e64652f656e67696e652f70" .
            "726f636564757265732f696d5f53656172636850726f6475637454726565" .
            "4e6f6465735f5075620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
